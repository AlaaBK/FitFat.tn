<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXj7wmNL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXj7wmNL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXj7wmNL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXj7wmNL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXj7wmNL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Xj7wmNL',
    'container.build_id' => '1bb297b2',
    'container.build_time' => 1627160844,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXj7wmNL');
