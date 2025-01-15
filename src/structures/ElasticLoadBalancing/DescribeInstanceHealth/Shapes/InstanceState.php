<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeInstanceHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $State
 * @property string|null $ReasonCode
 * @property string|null $Description
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     State?: string|null,
     *     ReasonCode?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
