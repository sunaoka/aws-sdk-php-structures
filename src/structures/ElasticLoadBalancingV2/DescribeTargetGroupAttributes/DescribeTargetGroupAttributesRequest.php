<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroupAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 */
class DescribeTargetGroupAttributesRequest extends Request
{
    /**
     * @param array{TargetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
