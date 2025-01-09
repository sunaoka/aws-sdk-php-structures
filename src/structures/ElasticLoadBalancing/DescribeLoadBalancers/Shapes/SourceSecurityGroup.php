<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerAlias
 * @property string $GroupName
 */
class SourceSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerAlias?: string,
     *     GroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
