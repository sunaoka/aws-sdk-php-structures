<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGuardDutyDetectorDataSourcesCloudTrailDetails $CloudTrail
 * @property AwsGuardDutyDetectorDataSourcesDnsLogsDetails $DnsLogs
 * @property AwsGuardDutyDetectorDataSourcesFlowLogsDetails $FlowLogs
 * @property AwsGuardDutyDetectorDataSourcesKubernetesDetails $Kubernetes
 * @property AwsGuardDutyDetectorDataSourcesMalwareProtectionDetails $MalwareProtection
 * @property AwsGuardDutyDetectorDataSourcesS3LogsDetails $S3Logs
 */
class AwsGuardDutyDetectorDataSourcesDetails extends Shape
{
    /**
     * @param array{
     *     CloudTrail?: AwsGuardDutyDetectorDataSourcesCloudTrailDetails,
     *     DnsLogs?: AwsGuardDutyDetectorDataSourcesDnsLogsDetails,
     *     FlowLogs?: AwsGuardDutyDetectorDataSourcesFlowLogsDetails,
     *     Kubernetes?: AwsGuardDutyDetectorDataSourcesKubernetesDetails,
     *     MalwareProtection?: AwsGuardDutyDetectorDataSourcesMalwareProtectionDetails,
     *     S3Logs?: AwsGuardDutyDetectorDataSourcesS3LogsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
