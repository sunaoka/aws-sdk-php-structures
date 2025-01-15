<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudTrailConfigurationResult $CloudTrail
 * @property DNSLogsConfigurationResult $DNSLogs
 * @property FlowLogsConfigurationResult $FlowLogs
 * @property S3LogsConfigurationResult $S3Logs
 * @property KubernetesConfigurationResult|null $Kubernetes
 * @property MalwareProtectionConfigurationResult|null $MalwareProtection
 */
class DataSourceConfigurationsResult extends Shape
{
    /**
     * @param array{
     *     CloudTrail: CloudTrailConfigurationResult,
     *     DNSLogs: DNSLogsConfigurationResult,
     *     FlowLogs: FlowLogsConfigurationResult,
     *     S3Logs: S3LogsConfigurationResult,
     *     Kubernetes?: KubernetesConfigurationResult|null,
     *     MalwareProtection?: MalwareProtectionConfigurationResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
