<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGasjgPN\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGasjgPN/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGasjgPN.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGasjgPN\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGasjgPN\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GasjgPN',
    'container.build_id' => 'fe83175b',
    'container.build_time' => 1556200728,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGasjgPN');
