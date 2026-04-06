<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property 'START'|'COMPLETE'|'SUCCESS'|'HEALTHY' $Condition
 */
class ContainerDependency extends Shape
{
    /**
     * @param array{
     *     ContainerName: string,
     *     Condition: 'START'|'COMPLETE'|'SUCCESS'|'HEALTHY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
