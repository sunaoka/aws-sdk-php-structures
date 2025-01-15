<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGuardDutyDetectorDataSourcesCloudTrailDetails|null $CloudTrail
 * @property AwsGuardDutyDetectorDataSourcesDnsLogsDetails|null $DnsLogs
 * @property AwsGuardDutyDetectorDataSourcesFlowLogsDetails|null $FlowLogs
 * @property AwsGuardDutyDetectorDataSourcesKubernetesDetails|null $Kubernetes
 * @property AwsGuardDutyDetectorDataSourcesMalwareProtectionDetails|null $MalwareProtection
 * @property AwsGuardDutyDetectorDataSourcesS3LogsDetails|null $S3Logs
 */
class AwsGuardDutyDetectorDataSourcesDetails extends Shape
{
    /**
     * @param array{
     *     CloudTrail?: AwsGuardDutyDetectorDataSourcesCloudTrailDetails|null,
     *     DnsLogs?: AwsGuardDutyDetectorDataSourcesDnsLogsDetails|null,
     *     FlowLogs?: AwsGuardDutyDetectorDataSourcesFlowLogsDetails|null,
     *     Kubernetes?: AwsGuardDutyDetectorDataSourcesKubernetesDetails|null,
     *     MalwareProtection?: AwsGuardDutyDetectorDataSourcesMalwareProtectionDetails|null,
     *     S3Logs?: AwsGuardDutyDetectorDataSourcesS3LogsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
