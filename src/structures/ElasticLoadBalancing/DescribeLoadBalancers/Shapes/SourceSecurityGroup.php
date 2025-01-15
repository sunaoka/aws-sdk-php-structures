<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerAlias
 * @property string|null $GroupName
 */
class SourceSecurityGroup extends Shape
{
    /**
     * @param array{
     *     OwnerAlias?: string|null,
     *     GroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
