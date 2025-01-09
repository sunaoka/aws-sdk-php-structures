<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryArn
 * @property int $port
 * @property string $containerName
 * @property int $containerPort
 */
class ServiceRegistry extends Shape
{
    /**
     * @param array{
     *     registryArn?: string,
     *     port?: int,
     *     containerName?: string,
     *     containerPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
