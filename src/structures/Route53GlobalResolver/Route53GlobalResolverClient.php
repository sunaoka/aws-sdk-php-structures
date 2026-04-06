<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver;

class Route53GlobalResolverClient extends \Aws\Route53GlobalResolver\Route53GlobalResolverClient
{
    use AssociateHostedZone\AssociateHostedZoneTrait;
    use BatchCreateFirewallRule\BatchCreateFirewallRuleTrait;
    use BatchDeleteFirewallRule\BatchDeleteFirewallRuleTrait;
    use BatchUpdateFirewallRule\BatchUpdateFirewallRuleTrait;
    use CreateAccessSource\CreateAccessSourceTrait;
    use CreateAccessToken\CreateAccessTokenTrait;
    use CreateDNSView\CreateDNSViewTrait;
    use CreateFirewallDomainList\CreateFirewallDomainListTrait;
    use CreateFirewallRule\CreateFirewallRuleTrait;
    use CreateGlobalResolver\CreateGlobalResolverTrait;
    use DeleteAccessSource\DeleteAccessSourceTrait;
    use DeleteAccessToken\DeleteAccessTokenTrait;
    use DeleteDNSView\DeleteDNSViewTrait;
    use DeleteFirewallDomainList\DeleteFirewallDomainListTrait;
    use DeleteFirewallRule\DeleteFirewallRuleTrait;
    use DeleteGlobalResolver\DeleteGlobalResolverTrait;
    use DisableDNSView\DisableDNSViewTrait;
    use DisassociateHostedZone\DisassociateHostedZoneTrait;
    use EnableDNSView\EnableDNSViewTrait;
    use GetAccessSource\GetAccessSourceTrait;
    use GetAccessToken\GetAccessTokenTrait;
    use GetDNSView\GetDNSViewTrait;
    use GetFirewallDomainList\GetFirewallDomainListTrait;
    use GetFirewallRule\GetFirewallRuleTrait;
    use GetGlobalResolver\GetGlobalResolverTrait;
    use GetHostedZoneAssociation\GetHostedZoneAssociationTrait;
    use GetManagedFirewallDomainList\GetManagedFirewallDomainListTrait;
    use ImportFirewallDomains\ImportFirewallDomainsTrait;
    use ListAccessSources\ListAccessSourcesTrait;
    use ListAccessTokens\ListAccessTokensTrait;
    use ListDNSViews\ListDNSViewsTrait;
    use ListFirewallDomainLists\ListFirewallDomainListsTrait;
    use ListFirewallDomains\ListFirewallDomainsTrait;
    use ListFirewallRules\ListFirewallRulesTrait;
    use ListGlobalResolvers\ListGlobalResolversTrait;
    use ListHostedZoneAssociations\ListHostedZoneAssociationsTrait;
    use ListManagedFirewallDomainLists\ListManagedFirewallDomainListsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccessSource\UpdateAccessSourceTrait;
    use UpdateAccessToken\UpdateAccessTokenTrait;
    use UpdateDNSView\UpdateDNSViewTrait;
    use UpdateFirewallDomains\UpdateFirewallDomainsTrait;
    use UpdateFirewallRule\UpdateFirewallRuleTrait;
    use UpdateGlobalResolver\UpdateGlobalResolverTrait;
    use UpdateHostedZoneAssociation\UpdateHostedZoneAssociationTrait;
}
