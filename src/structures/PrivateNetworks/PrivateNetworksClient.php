<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks;

class PrivateNetworksClient extends \Aws\PrivateNetworks\PrivateNetworksClient
{
    use AcknowledgeOrderReceipt\AcknowledgeOrderReceiptTrait;
    use ActivateDeviceIdentifier\ActivateDeviceIdentifierTrait;
    use ActivateNetworkSite\ActivateNetworkSiteTrait;
    use ConfigureAccessPoint\ConfigureAccessPointTrait;
    use CreateNetwork\CreateNetworkTrait;
    use CreateNetworkSite\CreateNetworkSiteTrait;
    use DeactivateDeviceIdentifier\DeactivateDeviceIdentifierTrait;
    use DeleteNetwork\DeleteNetworkTrait;
    use DeleteNetworkSite\DeleteNetworkSiteTrait;
    use GetDeviceIdentifier\GetDeviceIdentifierTrait;
    use GetNetwork\GetNetworkTrait;
    use GetNetworkResource\GetNetworkResourceTrait;
    use GetNetworkSite\GetNetworkSiteTrait;
    use GetOrder\GetOrderTrait;
    use ListDeviceIdentifiers\ListDeviceIdentifiersTrait;
    use ListNetworkResources\ListNetworkResourcesTrait;
    use ListNetworkSites\ListNetworkSitesTrait;
    use ListNetworks\ListNetworksTrait;
    use ListOrders\ListOrdersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use Ping\PingTrait;
    use StartNetworkResourceUpdate\StartNetworkResourceUpdateTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateNetworkSite\UpdateNetworkSiteTrait;
    use UpdateNetworkSitePlan\UpdateNetworkSitePlanTrait;
}
