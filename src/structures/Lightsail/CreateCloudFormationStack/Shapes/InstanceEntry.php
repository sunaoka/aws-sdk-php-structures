<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCloudFormationStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceName
 * @property string $instanceType
 * @property 'DEFAULT'|'INSTANCE'|'NONE'|'CLOSED' $portInfoSource
 * @property string|null $userData
 * @property string $availabilityZone
 */
class InstanceEntry extends Shape
{
    /**
     * @param array{
     *     sourceName: string,
     *     instanceType: string,
     *     portInfoSource: 'DEFAULT'|'INSTANCE'|'NONE'|'CLOSED',
     *     userData?: string|null,
     *     availabilityZone: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
