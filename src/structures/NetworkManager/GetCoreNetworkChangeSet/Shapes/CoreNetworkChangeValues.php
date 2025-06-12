<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SegmentName
 * @property string|null $NetworkFunctionGroupName
 * @property list<string>|null $EdgeLocations
 * @property int|null $Asn
 * @property string|null $Cidr
 * @property string|null $DestinationIdentifier
 * @property list<string>|null $InsideCidrBlocks
 * @property list<string>|null $SharedSegments
 * @property list<ServiceInsertionAction>|null $ServiceInsertionActions
 * @property bool|null $VpnEcmpSupport
 * @property bool|null $DnsSupport
 * @property bool|null $SecurityGroupReferencingSupport
 */
class CoreNetworkChangeValues extends Shape
{
    /**
     * @param array{
     *     SegmentName?: string|null,
     *     NetworkFunctionGroupName?: string|null,
     *     EdgeLocations?: list<string>|null,
     *     Asn?: int|null,
     *     Cidr?: string|null,
     *     DestinationIdentifier?: string|null,
     *     InsideCidrBlocks?: list<string>|null,
     *     SharedSegments?: list<string>|null,
     *     ServiceInsertionActions?: list<ServiceInsertionAction>|null,
     *     VpnEcmpSupport?: bool|null,
     *     DnsSupport?: bool|null,
     *     SecurityGroupReferencingSupport?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
