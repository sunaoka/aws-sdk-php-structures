<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN'|'OUT' $Direction
 * @property string $Protocol
 * @property PortRange $OpenPortRange
 * @property string $SourceIpV4
 * @property string $SourceIpV6
 * @property int $SourcePort
 * @property string $SourceDomain
 * @property string $SourceMac
 * @property string $DestinationIpV4
 * @property string $DestinationIpV6
 * @property int $DestinationPort
 * @property string $DestinationDomain
 */
class Network extends Shape
{
    /**
     * @param array{
     *     Direction?: 'IN'|'OUT',
     *     Protocol?: string,
     *     OpenPortRange?: PortRange,
     *     SourceIpV4?: string,
     *     SourceIpV6?: string,
     *     SourcePort?: int,
     *     SourceDomain?: string,
     *     SourceMac?: string,
     *     DestinationIpV4?: string,
     *     DestinationIpV6?: string,
     *     DestinationPort?: int,
     *     DestinationDomain?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
