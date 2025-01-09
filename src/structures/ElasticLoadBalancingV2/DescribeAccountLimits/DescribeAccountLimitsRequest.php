<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeAccountLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int<1, 400> $PageSize
 */
class DescribeAccountLimitsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     PageSize?: int<1, 400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
