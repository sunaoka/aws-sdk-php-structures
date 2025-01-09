<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SegmentName
 * @property string $NetworkFunctionGroupName
 * @property list<string> $EdgeLocations
 * @property int $Asn
 * @property string $Cidr
 * @property string $DestinationIdentifier
 * @property list<string> $InsideCidrBlocks
 * @property list<string> $SharedSegments
 * @property list<ServiceInsertionAction> $ServiceInsertionActions
 */
class CoreNetworkChangeValues extends Shape
{
    /**
     * @param array{
     *     SegmentName?: string,
     *     NetworkFunctionGroupName?: string,
     *     EdgeLocations?: list<string>,
     *     Asn?: int,
     *     Cidr?: string,
     *     DestinationIdentifier?: string,
     *     InsideCidrBlocks?: list<string>,
     *     SharedSegments?: list<string>,
     *     ServiceInsertionActions?: list<ServiceInsertionAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
