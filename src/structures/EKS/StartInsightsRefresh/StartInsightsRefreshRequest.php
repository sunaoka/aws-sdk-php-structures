<?php

namespace Sunaoka\Aws\Structures\EKS\StartInsightsRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 */
class StartInsightsRefreshRequest extends Request
{
    /**
     * @param array{clusterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
