<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWHqjCz1\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWHqjCz1/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWHqjCz1.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWHqjCz1\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWHqjCz1\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WHqjCz1',
    'container.build_id' => '3af389d0',
    'container.build_time' => 1627227731,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWHqjCz1');
