<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZNxZzNA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZNxZzNA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZNxZzNA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZNxZzNA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZNxZzNA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZNxZzNA',
    'container.build_id' => '3b8ce28f',
    'container.build_time' => 1556198727,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZNxZzNA');
