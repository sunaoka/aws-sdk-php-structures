<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN'|'OUT'|null $Direction
 * @property string|null $Protocol
 * @property PortRange|null $OpenPortRange
 * @property string|null $SourceIpV4
 * @property string|null $SourceIpV6
 * @property int|null $SourcePort
 * @property string|null $SourceDomain
 * @property string|null $SourceMac
 * @property string|null $DestinationIpV4
 * @property string|null $DestinationIpV6
 * @property int|null $DestinationPort
 * @property string|null $DestinationDomain
 */
class Network extends Shape
{
    /**
     * @param array{
     *     Direction?: 'IN'|'OUT'|null,
     *     Protocol?: string|null,
     *     OpenPortRange?: PortRange|null,
     *     SourceIpV4?: string|null,
     *     SourceIpV6?: string|null,
     *     SourcePort?: int|null,
     *     SourceDomain?: string|null,
     *     SourceMac?: string|null,
     *     DestinationIpV4?: string|null,
     *     DestinationIpV6?: string|null,
     *     DestinationPort?: int|null,
     *     DestinationDomain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
