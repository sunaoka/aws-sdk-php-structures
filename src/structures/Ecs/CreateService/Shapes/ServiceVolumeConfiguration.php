<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property ServiceManagedEBSVolumeConfiguration $managedEBSVolume
 */
class ServiceVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     managedEBSVolume?: ServiceManagedEBSVolumeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
