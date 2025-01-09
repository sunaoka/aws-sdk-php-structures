<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudTrailConfigurationResult $CloudTrail
 * @property DNSLogsConfigurationResult $DNSLogs
 * @property FlowLogsConfigurationResult $FlowLogs
 * @property S3LogsConfigurationResult $S3Logs
 * @property KubernetesConfigurationResult $Kubernetes
 * @property MalwareProtectionConfigurationResult $MalwareProtection
 */
class DataSourceConfigurationsResult extends Shape
{
    /**
     * @param array{
     *     CloudTrail: CloudTrailConfigurationResult,
     *     DNSLogs: DNSLogsConfigurationResult,
     *     FlowLogs: FlowLogsConfigurationResult,
     *     S3Logs: S3LogsConfigurationResult,
     *     Kubernetes?: KubernetesConfigurationResult,
     *     MalwareProtection?: MalwareProtectionConfigurationResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
