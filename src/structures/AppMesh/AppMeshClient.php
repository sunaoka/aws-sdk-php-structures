<?php

namespace Sunaoka\Aws\Structures\AppMesh;

class AppMeshClient extends \Aws\AppMesh\AppMeshClient
{
    use CreateGatewayRoute\CreateGatewayRouteTrait;
    use CreateMesh\CreateMeshTrait;
    use CreateRoute\CreateRouteTrait;
    use CreateVirtualGateway\CreateVirtualGatewayTrait;
    use CreateVirtualNode\CreateVirtualNodeTrait;
    use CreateVirtualRouter\CreateVirtualRouterTrait;
    use CreateVirtualService\CreateVirtualServiceTrait;
    use DeleteGatewayRoute\DeleteGatewayRouteTrait;
    use DeleteMesh\DeleteMeshTrait;
    use DeleteRoute\DeleteRouteTrait;
    use DeleteVirtualGateway\DeleteVirtualGatewayTrait;
    use DeleteVirtualNode\DeleteVirtualNodeTrait;
    use DeleteVirtualRouter\DeleteVirtualRouterTrait;
    use DeleteVirtualService\DeleteVirtualServiceTrait;
    use DescribeGatewayRoute\DescribeGatewayRouteTrait;
    use DescribeMesh\DescribeMeshTrait;
    use DescribeRoute\DescribeRouteTrait;
    use DescribeVirtualGateway\DescribeVirtualGatewayTrait;
    use DescribeVirtualNode\DescribeVirtualNodeTrait;
    use DescribeVirtualRouter\DescribeVirtualRouterTrait;
    use DescribeVirtualService\DescribeVirtualServiceTrait;
    use ListGatewayRoutes\ListGatewayRoutesTrait;
    use ListMeshes\ListMeshesTrait;
    use ListRoutes\ListRoutesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVirtualGateways\ListVirtualGatewaysTrait;
    use ListVirtualNodes\ListVirtualNodesTrait;
    use ListVirtualRouters\ListVirtualRoutersTrait;
    use ListVirtualServices\ListVirtualServicesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateGatewayRoute\UpdateGatewayRouteTrait;
    use UpdateMesh\UpdateMeshTrait;
    use UpdateRoute\UpdateRouteTrait;
    use UpdateVirtualGateway\UpdateVirtualGatewayTrait;
    use UpdateVirtualNode\UpdateVirtualNodeTrait;
    use UpdateVirtualRouter\UpdateVirtualRouterTrait;
    use UpdateVirtualService\UpdateVirtualServiceTrait;
}
