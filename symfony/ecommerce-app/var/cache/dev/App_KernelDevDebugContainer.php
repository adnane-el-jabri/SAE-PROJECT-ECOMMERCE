<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPMQj1Uk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPMQj1Uk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPMQj1Uk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPMQj1Uk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPMQj1Uk\App_KernelDevDebugContainer([
    'container.build_hash' => 'PMQj1Uk',
    'container.build_id' => '175ce8cd',
    'container.build_time' => 1709571777,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPMQj1Uk');
