<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXBcruLI\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXBcruLI/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXBcruLI.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXBcruLI\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXBcruLI\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XBcruLI',
    'container.build_id' => '9200738c',
    'container.build_time' => 1626044566,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXBcruLI');
