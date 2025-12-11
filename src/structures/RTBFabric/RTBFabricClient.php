<?php

namespace Sunaoka\Aws\Structures\RTBFabric;

class RTBFabricClient extends \Aws\RTBFabric\RTBFabricClient
{
    use AcceptLink\AcceptLinkTrait;
    use CreateInboundExternalLink\CreateInboundExternalLinkTrait;
    use CreateLink\CreateLinkTrait;
    use CreateOutboundExternalLink\CreateOutboundExternalLinkTrait;
    use CreateRequesterGateway\CreateRequesterGatewayTrait;
    use CreateResponderGateway\CreateResponderGatewayTrait;
    use DeleteInboundExternalLink\DeleteInboundExternalLinkTrait;
    use DeleteLink\DeleteLinkTrait;
    use DeleteOutboundExternalLink\DeleteOutboundExternalLinkTrait;
    use DeleteRequesterGateway\DeleteRequesterGatewayTrait;
    use DeleteResponderGateway\DeleteResponderGatewayTrait;
    use GetInboundExternalLink\GetInboundExternalLinkTrait;
    use GetLink\GetLinkTrait;
    use GetOutboundExternalLink\GetOutboundExternalLinkTrait;
    use GetRequesterGateway\GetRequesterGatewayTrait;
    use GetResponderGateway\GetResponderGatewayTrait;
    use ListLinks\ListLinksTrait;
    use ListRequesterGateways\ListRequesterGatewaysTrait;
    use ListResponderGateways\ListResponderGatewaysTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectLink\RejectLinkTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLink\UpdateLinkTrait;
    use UpdateLinkModuleFlow\UpdateLinkModuleFlowTrait;
    use UpdateRequesterGateway\UpdateRequesterGatewayTrait;
    use UpdateResponderGateway\UpdateResponderGatewayTrait;
}
