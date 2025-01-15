<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeAccountLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeAccountLimitsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
