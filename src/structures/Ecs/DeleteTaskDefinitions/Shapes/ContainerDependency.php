<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerName
 * @property 'START'|'COMPLETE'|'SUCCESS'|'HEALTHY' $condition
 */
class ContainerDependency extends Shape
{
    /**
     * @param array{
     *     containerName: string,
     *     condition: 'START'|'COMPLETE'|'SUCCESS'|'HEALTHY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
