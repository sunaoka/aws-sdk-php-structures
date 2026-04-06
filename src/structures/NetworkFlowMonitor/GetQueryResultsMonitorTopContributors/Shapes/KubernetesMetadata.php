<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetQueryResultsMonitorTopContributors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $localServiceName
 * @property string|null $localPodName
 * @property string|null $localPodNamespace
 * @property string|null $remoteServiceName
 * @property string|null $remotePodName
 * @property string|null $remotePodNamespace
 */
class KubernetesMetadata extends Shape
{
    /**
     * @param array{
     *     localServiceName?: string|null,
     *     localPodName?: string|null,
     *     localPodNamespace?: string|null,
     *     remoteServiceName?: string|null,
     *     remotePodName?: string|null,
     *     remotePodNamespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
