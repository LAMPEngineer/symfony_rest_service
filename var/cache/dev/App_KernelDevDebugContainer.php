<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV2QgGBU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV2QgGBU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV2QgGBU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV2QgGBU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV2QgGBU\App_KernelDevDebugContainer([
    'container.build_hash' => 'V2QgGBU',
    'container.build_id' => '741bfd40',
    'container.build_time' => 1585387225,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV2QgGBU');
