<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator;

class GlobalAcceleratorClient extends \Aws\GlobalAccelerator\GlobalAcceleratorClient
{
    use AddCustomRoutingEndpoints\AddCustomRoutingEndpointsTrait;
    use AddEndpoints\AddEndpointsTrait;
    use AdvertiseByoipCidr\AdvertiseByoipCidrTrait;
    use AllowCustomRoutingTraffic\AllowCustomRoutingTrafficTrait;
    use CreateAccelerator\CreateAcceleratorTrait;
    use CreateCustomRoutingAccelerator\CreateCustomRoutingAcceleratorTrait;
    use CreateCustomRoutingEndpointGroup\CreateCustomRoutingEndpointGroupTrait;
    use CreateCustomRoutingListener\CreateCustomRoutingListenerTrait;
    use CreateEndpointGroup\CreateEndpointGroupTrait;
    use CreateListener\CreateListenerTrait;
    use DeleteAccelerator\DeleteAcceleratorTrait;
    use DeleteCustomRoutingAccelerator\DeleteCustomRoutingAcceleratorTrait;
    use DeleteCustomRoutingEndpointGroup\DeleteCustomRoutingEndpointGroupTrait;
    use DeleteCustomRoutingListener\DeleteCustomRoutingListenerTrait;
    use DeleteEndpointGroup\DeleteEndpointGroupTrait;
    use DeleteListener\DeleteListenerTrait;
    use DenyCustomRoutingTraffic\DenyCustomRoutingTrafficTrait;
    use DeprovisionByoipCidr\DeprovisionByoipCidrTrait;
    use DescribeAccelerator\DescribeAcceleratorTrait;
    use DescribeAcceleratorAttributes\DescribeAcceleratorAttributesTrait;
    use DescribeCustomRoutingAccelerator\DescribeCustomRoutingAcceleratorTrait;
    use DescribeCustomRoutingAcceleratorAttributes\DescribeCustomRoutingAcceleratorAttributesTrait;
    use DescribeCustomRoutingEndpointGroup\DescribeCustomRoutingEndpointGroupTrait;
    use DescribeCustomRoutingListener\DescribeCustomRoutingListenerTrait;
    use DescribeEndpointGroup\DescribeEndpointGroupTrait;
    use DescribeListener\DescribeListenerTrait;
    use ListAccelerators\ListAcceleratorsTrait;
    use ListByoipCidrs\ListByoipCidrsTrait;
    use ListCustomRoutingAccelerators\ListCustomRoutingAcceleratorsTrait;
    use ListCustomRoutingEndpointGroups\ListCustomRoutingEndpointGroupsTrait;
    use ListCustomRoutingListeners\ListCustomRoutingListenersTrait;
    use ListCustomRoutingPortMappings\ListCustomRoutingPortMappingsTrait;
    use ListCustomRoutingPortMappingsByDestination\ListCustomRoutingPortMappingsByDestinationTrait;
    use ListEndpointGroups\ListEndpointGroupsTrait;
    use ListListeners\ListListenersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ProvisionByoipCidr\ProvisionByoipCidrTrait;
    use RemoveCustomRoutingEndpoints\RemoveCustomRoutingEndpointsTrait;
    use RemoveEndpoints\RemoveEndpointsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccelerator\UpdateAcceleratorTrait;
    use UpdateAcceleratorAttributes\UpdateAcceleratorAttributesTrait;
    use UpdateCustomRoutingAccelerator\UpdateCustomRoutingAcceleratorTrait;
    use UpdateCustomRoutingAcceleratorAttributes\UpdateCustomRoutingAcceleratorAttributesTrait;
    use UpdateCustomRoutingListener\UpdateCustomRoutingListenerTrait;
    use UpdateEndpointGroup\UpdateEndpointGroupTrait;
    use UpdateListener\UpdateListenerTrait;
    use WithdrawByoipCidr\WithdrawByoipCidrTrait;
}
