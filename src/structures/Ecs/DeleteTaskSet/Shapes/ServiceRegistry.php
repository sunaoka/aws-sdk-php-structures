<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $registryArn
 * @property int|null $port
 * @property string|null $containerName
 * @property int|null $containerPort
 */
class ServiceRegistry extends Shape
{
    /**
     * @param array{
     *     registryArn?: string|null,
     *     port?: int|null,
     *     containerName?: string|null,
     *     containerPort?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
