<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCloudFormationStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceName
 * @property string $instanceType
 * @property 'DEFAULT'|'INSTANCE'|'NONE'|'CLOSED' $portInfoSource
 * @property string $userData
 * @property string $availabilityZone
 */
class InstanceEntry extends Shape
{
    /**
     * @param array{
     *     sourceName: string,
     *     instanceType: string,
     *     portInfoSource: 'DEFAULT'|'INSTANCE'|'NONE'|'CLOSED',
     *     userData?: string,
     *     availabilityZone: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
