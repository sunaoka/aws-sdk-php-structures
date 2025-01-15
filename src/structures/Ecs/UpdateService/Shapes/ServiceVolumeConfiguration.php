<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ServiceManagedEBSVolumeConfiguration|null $managedEBSVolume
 */
class ServiceVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     managedEBSVolume?: ServiceManagedEBSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
