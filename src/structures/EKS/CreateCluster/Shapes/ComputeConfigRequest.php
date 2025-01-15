<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property list<string>|null $nodePools
 * @property string|null $nodeRoleArn
 */
class ComputeConfigRequest extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     nodePools?: list<string>|null,
     *     nodeRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
