<?php

namespace Sunaoka\Aws\Structures\MediaConnect;

class MediaConnectClient extends \Aws\MediaConnect\MediaConnectClient
{
    use AddBridgeOutputs\AddBridgeOutputsTrait;
    use AddBridgeSources\AddBridgeSourcesTrait;
    use AddFlowMediaStreams\AddFlowMediaStreamsTrait;
    use AddFlowOutputs\AddFlowOutputsTrait;
    use AddFlowSources\AddFlowSourcesTrait;
    use AddFlowVpcInterfaces\AddFlowVpcInterfacesTrait;
    use CreateBridge\CreateBridgeTrait;
    use CreateFlow\CreateFlowTrait;
    use CreateGateway\CreateGatewayTrait;
    use DeleteBridge\DeleteBridgeTrait;
    use DeleteFlow\DeleteFlowTrait;
    use DeleteGateway\DeleteGatewayTrait;
    use DeregisterGatewayInstance\DeregisterGatewayInstanceTrait;
    use DescribeBridge\DescribeBridgeTrait;
    use DescribeFlow\DescribeFlowTrait;
    use DescribeFlowSourceMetadata\DescribeFlowSourceMetadataTrait;
    use DescribeFlowSourceThumbnail\DescribeFlowSourceThumbnailTrait;
    use DescribeGateway\DescribeGatewayTrait;
    use DescribeGatewayInstance\DescribeGatewayInstanceTrait;
    use DescribeOffering\DescribeOfferingTrait;
    use DescribeReservation\DescribeReservationTrait;
    use GrantFlowEntitlements\GrantFlowEntitlementsTrait;
    use ListBridges\ListBridgesTrait;
    use ListEntitlements\ListEntitlementsTrait;
    use ListFlows\ListFlowsTrait;
    use ListGatewayInstances\ListGatewayInstancesTrait;
    use ListGateways\ListGatewaysTrait;
    use ListOfferings\ListOfferingsTrait;
    use ListReservations\ListReservationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PurchaseOffering\PurchaseOfferingTrait;
    use RemoveBridgeOutput\RemoveBridgeOutputTrait;
    use RemoveBridgeSource\RemoveBridgeSourceTrait;
    use RemoveFlowMediaStream\RemoveFlowMediaStreamTrait;
    use RemoveFlowOutput\RemoveFlowOutputTrait;
    use RemoveFlowSource\RemoveFlowSourceTrait;
    use RemoveFlowVpcInterface\RemoveFlowVpcInterfaceTrait;
    use RevokeFlowEntitlement\RevokeFlowEntitlementTrait;
    use StartFlow\StartFlowTrait;
    use StopFlow\StopFlowTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBridge\UpdateBridgeTrait;
    use UpdateBridgeOutput\UpdateBridgeOutputTrait;
    use UpdateBridgeSource\UpdateBridgeSourceTrait;
    use UpdateBridgeState\UpdateBridgeStateTrait;
    use UpdateFlow\UpdateFlowTrait;
    use UpdateFlowEntitlement\UpdateFlowEntitlementTrait;
    use UpdateFlowMediaStream\UpdateFlowMediaStreamTrait;
    use UpdateFlowOutput\UpdateFlowOutputTrait;
    use UpdateFlowSource\UpdateFlowSourceTrait;
    use UpdateGatewayInstance\UpdateGatewayInstanceTrait;
}
