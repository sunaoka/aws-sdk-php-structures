<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REPLICA'|'DAEMON'|null $SchedulingStrategy
 * @property string|null $ContainerGroupDefinitionName
 */
class ContainerGroupDefinitionProperty extends Shape
{
    /**
     * @param array{
     *     SchedulingStrategy?: 'REPLICA'|'DAEMON'|null,
     *     ContainerGroupDefinitionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
