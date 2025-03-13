<?php


function countImagesInDirectory($directory)
{
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff', 'webp']; // 你可以根据需要添加或删除图片扩展名
    $imageCount = 0;

    // 打开目录
    if ($handle = opendir($directory)) {
        while (false !== ($entry = readdir($handle))) {
            // 忽略 '.' 和 '..'
            if ($entry != "." && $entry != "..") {
                $fullPath = $directory . DIRECTORY_SEPARATOR . $entry;

                // 如果是目录，递归调用
                if (is_dir($fullPath)) {
                    $imageCount += countImagesInDirectory($fullPath);
                } else {
                    // 检查文件扩展名
                    $fileInfo = pathinfo($fullPath);
                    $extension = strtolower($fileInfo['extension']);
                    if (in_array($extension, $imageExtensions)) {
                        $imageCount++;
                    }
                }
            }
        }
        closedir($handle);
    }

    return $imageCount;
}

// 示例用法
$directoryPath = __DIR__ . '/fix'; // 替换为你的目录路径
$imageCount = countImagesInDirectory($directoryPath);
echo "Total number of images: " . $imageCount;


