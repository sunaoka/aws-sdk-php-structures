<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsightsRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 */
class DescribeInsightsRefreshRequest extends Request
{
    /**
     * @param array{clusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
