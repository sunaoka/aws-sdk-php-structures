<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryStatusWorkloadInsightsTopContributorsData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property string $queryId
 */
class GetQueryStatusWorkloadInsightsTopContributorsDataRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
     *     queryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
