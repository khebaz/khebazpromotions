<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/"; // This should point to the 'uploads' directory
    $maxFileSize = 100 * 1024 * 1024; // 100MB in bytes
    $allowedVideoTypes = ['video/mp4', 'video/avi', 'video/mov', 'video/mkv'];
    $allowedImageTypes = ['image/jpeg', 'image/png', 'image/gif'];

    // Handle Video Upload
    if (isset($_FILES['video'])) {
        $videoFile = $_FILES['video'];
        if ($videoFile['size'] <= $maxFileSize && in_array($videoFile['type'], $allowedVideoTypes)) {
            $videoFilePath = $targetDir . basename($videoFile['name']);
            if (move_uploaded_file($videoFile['tmp_name'], $videoFilePath)) {
                echo "Video uploaded successfully.<br>";
            } else {
                echo "Failed to upload video.<br>";
            }
        } else {
            echo "Invalid video file or file size too large.<br>";
        }
    }

    // Handle Image Upload
    if (isset($_FILES['image'])) {
        $imageFile = $_FILES['image'];
        if (in_array($imageFile['type'], $allowedImageTypes)) {
            $imageFilePath = $targetDir . basename($imageFile['name']);
            if (move_uploaded_file($imageFile['tmp_name'], $imageFilePath)) {
                echo "Image uploaded successfully.<br>";
            } else {
                echo "Failed to upload image.<br>";
            }
        } else {
            echo "Invalid image file.<br>";
        }
    }

    // Redirect to a confirmation page (optional)
    // header('Location: thank_you.html');
}
?>
