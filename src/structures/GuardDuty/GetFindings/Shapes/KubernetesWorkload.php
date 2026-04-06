<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ContainerUids
 * @property string|null $Namespace
 * @property 'PODS'|'JOBS'|'CRONJOBS'|'DEPLOYMENTS'|'DAEMONSETS'|'STATEFULSETS'|'REPLICASETS'|'REPLICATIONCONTROLLERS'|null $KubernetesResourcesTypes
 */
class KubernetesWorkload extends Shape
{
    /**
     * @param array{
     *     ContainerUids?: list<string>|null,
     *     Namespace?: string|null,
     *     KubernetesResourcesTypes?: 'PODS'|'JOBS'|'CRONJOBS'|'DEPLOYMENTS'|'DAEMONSETS'|'STATEFULSETS'|'REPLICASETS'|'REPLICATIONCONTROLLERS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
