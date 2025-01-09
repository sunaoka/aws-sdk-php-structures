<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsGuardDutyDetectorDataSourcesKubernetesAuditLogsDetails $AuditLogs
 */
class AwsGuardDutyDetectorDataSourcesKubernetesDetails extends Shape
{
    /**
     * @param array{AuditLogs?: AwsGuardDutyDetectorDataSourcesKubernetesAuditLogsDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
