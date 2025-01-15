<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceFreeTrial|null $CloudTrail
 * @property DataSourceFreeTrial|null $DnsLogs
 * @property DataSourceFreeTrial|null $FlowLogs
 * @property DataSourceFreeTrial|null $S3Logs
 * @property KubernetesDataSourceFreeTrial|null $Kubernetes
 * @property MalwareProtectionDataSourceFreeTrial|null $MalwareProtection
 */
class DataSourcesFreeTrial extends Shape
{
    /**
     * @param array{
     *     CloudTrail?: DataSourceFreeTrial|null,
     *     DnsLogs?: DataSourceFreeTrial|null,
     *     FlowLogs?: DataSourceFreeTrial|null,
     *     S3Logs?: DataSourceFreeTrial|null,
     *     Kubernetes?: KubernetesDataSourceFreeTrial|null,
     *     MalwareProtection?: MalwareProtectionDataSourceFreeTrial|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
