<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeInstanceHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $State
 * @property string $ReasonCode
 * @property string $Description
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     State?: string,
     *     ReasonCode?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
