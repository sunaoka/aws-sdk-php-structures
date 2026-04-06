<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EdgeLocation
 * @property string|null $PeerEdgeLocation
 * @property 'inbound'|'outbound'|null $RoutingPolicyDirection
 * @property string|null $SegmentName
 * @property string|null $NetworkFunctionGroupName
 * @property string|null $AttachmentId
 * @property string|null $Cidr
 * @property list<RoutingPolicyAssociationDetail>|null $RoutingPolicyAssociationDetails
 */
class CoreNetworkChangeEventValues extends Shape
{
    /**
     * @param array{
     *     EdgeLocation?: string|null,
     *     PeerEdgeLocation?: string|null,
     *     RoutingPolicyDirection?: 'inbound'|'outbound'|null,
     *     SegmentName?: string|null,
     *     NetworkFunctionGroupName?: string|null,
     *     AttachmentId?: string|null,
     *     Cidr?: string|null,
     *     RoutingPolicyAssociationDetails?: list<RoutingPolicyAssociationDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
