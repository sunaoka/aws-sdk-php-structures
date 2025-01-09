<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property list<string> $nodePools
 * @property string $nodeRoleArn
 */
class ComputeConfigResponse extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     nodePools?: list<string>,
     *     nodeRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
