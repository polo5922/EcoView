<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRY8MZn7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRY8MZn7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRY8MZn7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRY8MZn7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRY8MZn7\App_KernelDevDebugContainer([
    'container.build_hash' => 'RY8MZn7',
    'container.build_id' => 'cba0d319',
    'container.build_time' => 1602224993,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRY8MZn7');
