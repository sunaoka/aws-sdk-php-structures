<?php

namespace Sunaoka\Aws\Structures\RTBFabric;

class RTBFabricClient extends \Aws\RTBFabric\RTBFabricClient
{
    use AcceptLink\AcceptLinkTrait;
    use AssociateCertificate\AssociateCertificateTrait;
    use CreateInboundExternalLink\CreateInboundExternalLinkTrait;
    use CreateLink\CreateLinkTrait;
    use CreateLinkRoutingRule\CreateLinkRoutingRuleTrait;
    use CreateOutboundExternalLink\CreateOutboundExternalLinkTrait;
    use CreateRequesterGateway\CreateRequesterGatewayTrait;
    use CreateResponderGateway\CreateResponderGatewayTrait;
    use DeleteInboundExternalLink\DeleteInboundExternalLinkTrait;
    use DeleteLink\DeleteLinkTrait;
    use DeleteLinkRoutingRule\DeleteLinkRoutingRuleTrait;
    use DeleteOutboundExternalLink\DeleteOutboundExternalLinkTrait;
    use DeleteRequesterGateway\DeleteRequesterGatewayTrait;
    use DeleteResponderGateway\DeleteResponderGatewayTrait;
    use DisassociateCertificate\DisassociateCertificateTrait;
    use GetCertificateAssociation\GetCertificateAssociationTrait;
    use GetInboundExternalLink\GetInboundExternalLinkTrait;
    use GetLink\GetLinkTrait;
    use GetLinkRoutingRule\GetLinkRoutingRuleTrait;
    use GetOutboundExternalLink\GetOutboundExternalLinkTrait;
    use GetRequesterGateway\GetRequesterGatewayTrait;
    use GetResponderGateway\GetResponderGatewayTrait;
    use ListCertificateAssociations\ListCertificateAssociationsTrait;
    use ListLinkRoutingRules\ListLinkRoutingRulesTrait;
    use ListLinks\ListLinksTrait;
    use ListRequesterGateways\ListRequesterGatewaysTrait;
    use ListResponderGateways\ListResponderGatewaysTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RejectLink\RejectLinkTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLink\UpdateLinkTrait;
    use UpdateLinkModuleFlow\UpdateLinkModuleFlowTrait;
    use UpdateLinkRoutingRule\UpdateLinkRoutingRuleTrait;
    use UpdateRequesterGateway\UpdateRequesterGatewayTrait;
    use UpdateResponderGateway\UpdateResponderGatewayTrait;
}
