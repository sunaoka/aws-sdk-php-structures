<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceFreeTrial $CloudTrail
 * @property DataSourceFreeTrial $DnsLogs
 * @property DataSourceFreeTrial $FlowLogs
 * @property DataSourceFreeTrial $S3Logs
 * @property KubernetesDataSourceFreeTrial $Kubernetes
 * @property MalwareProtectionDataSourceFreeTrial $MalwareProtection
 */
class DataSourcesFreeTrial extends Shape
{
    /**
     * @param array{
     *     CloudTrail?: DataSourceFreeTrial,
     *     DnsLogs?: DataSourceFreeTrial,
     *     FlowLogs?: DataSourceFreeTrial,
     *     S3Logs?: DataSourceFreeTrial,
     *     Kubernetes?: KubernetesDataSourceFreeTrial,
     *     MalwareProtection?: MalwareProtectionDataSourceFreeTrial
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
