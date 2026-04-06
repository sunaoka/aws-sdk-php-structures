<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property TaskManagedEBSVolumeConfiguration|null $managedEBSVolume
 */
class TaskVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     managedEBSVolume?: TaskManagedEBSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
