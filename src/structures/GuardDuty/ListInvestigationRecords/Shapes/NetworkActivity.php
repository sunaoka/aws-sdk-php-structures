<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Protocol
 * @property string|null $Direction
 * @property string|null $Method
 * @property string|null $Blocked
 * @property string|null $Platform
 * @property NetworkPorts|null $Ports
 * @property NetworkTraffic|null $Traffic
 * @property NetworkAnomaly|null $Anomaly
 * @property DnsContext|null $Dns
 * @property NetworkCounts|null $Counts
 * @property Enrichment|null $Enrichment
 */
class NetworkActivity extends Shape
{
    /**
     * @param array{
     *     Protocol?: string|null,
     *     Direction?: string|null,
     *     Method?: string|null,
     *     Blocked?: string|null,
     *     Platform?: string|null,
     *     Ports?: NetworkPorts|null,
     *     Traffic?: NetworkTraffic|null,
     *     Anomaly?: NetworkAnomaly|null,
     *     Dns?: DnsContext|null,
     *     Counts?: NetworkCounts|null,
     *     Enrichment?: Enrichment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
