<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2ySkmc7\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2ySkmc7/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/Container2ySkmc7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\Container2ySkmc7\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \Container2ySkmc7\srcApp_KernelProdContainer([
    'container.build_hash' => '2ySkmc7',
    'container.build_id' => '58ee596c',
    'container.build_time' => 1556293627,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2ySkmc7');