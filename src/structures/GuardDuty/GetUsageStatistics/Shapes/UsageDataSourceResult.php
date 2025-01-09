<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN' $DataSource
 * @property Total $Total
 */
class UsageDataSourceResult extends Shape
{
    /**
     * @param array{
     *     DataSource?: 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN',
     *     Total?: Total
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
