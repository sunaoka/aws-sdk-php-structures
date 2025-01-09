<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $localServiceName
 * @property string $localPodName
 * @property string $localPodNamespace
 * @property string $remoteServiceName
 * @property string $remotePodName
 * @property string $remotePodNamespace
 */
class KubernetesMetadata extends Shape
{
    /**
     * @param array{
     *     localServiceName?: string,
     *     localPodName?: string,
     *     localPodNamespace?: string,
     *     remoteServiceName?: string,
     *     remotePodName?: string,
     *     remotePodNamespace?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
