<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEG8ExRi\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEG8ExRi/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEG8ExRi.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEG8ExRi\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerEG8ExRi\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'EG8ExRi',
    'container.build_id' => '7a60215c',
    'container.build_time' => 1627350764,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEG8ExRi');
