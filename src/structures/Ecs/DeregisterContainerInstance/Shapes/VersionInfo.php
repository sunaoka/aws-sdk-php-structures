<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentVersion
 * @property string $agentHash
 * @property string $dockerVersion
 */
class VersionInfo extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string,
     *     agentHash?: string,
     *     dockerVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
