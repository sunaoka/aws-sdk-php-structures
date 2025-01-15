<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentVersion
 * @property string|null $agentHash
 * @property string|null $dockerVersion
 */
class VersionInfo extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string|null,
     *     agentHash?: string|null,
     *     dockerVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
