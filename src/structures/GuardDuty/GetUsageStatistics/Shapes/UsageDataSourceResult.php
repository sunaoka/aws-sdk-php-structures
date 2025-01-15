<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'|null $DataSource
 * @property Total|null $Total
 */
class UsageDataSourceResult extends Shape
{
    /**
     * @param array{
     *     DataSource?: 'FLOW_LOGS'|'CLOUD_TRAIL'|'DNS_LOGS'|'S3_LOGS'|'KUBERNETES_AUDIT_LOGS'|'EC2_MALWARE_SCAN'|null,
     *     Total?: Total|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
