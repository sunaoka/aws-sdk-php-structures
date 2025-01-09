<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeAccountLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeAccountLimitsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
