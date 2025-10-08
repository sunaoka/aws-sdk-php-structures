<?php

namespace Sunaoka\Aws\Structures\FMS;

class FMSClient extends \Aws\FMS\FMSClient
{
    use AssociateAdminAccount\AssociateAdminAccountTrait;
    use AssociateThirdPartyFirewall\AssociateThirdPartyFirewallTrait;
    use BatchAssociateResource\BatchAssociateResourceTrait;
    use BatchDisassociateResource\BatchDisassociateResourceTrait;
    use DeleteAppsList\DeleteAppsListTrait;
    use DeleteNotificationChannel\DeleteNotificationChannelTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeleteProtocolsList\DeleteProtocolsListTrait;
    use DeleteResourceSet\DeleteResourceSetTrait;
    use DisassociateAdminAccount\DisassociateAdminAccountTrait;
    use DisassociateThirdPartyFirewall\DisassociateThirdPartyFirewallTrait;
    use GetAdminAccount\GetAdminAccountTrait;
    use GetAdminScope\GetAdminScopeTrait;
    use GetAppsList\GetAppsListTrait;
    use GetComplianceDetail\GetComplianceDetailTrait;
    use GetNotificationChannel\GetNotificationChannelTrait;
    use GetPolicy\GetPolicyTrait;
    use GetProtectionStatus\GetProtectionStatusTrait;
    use GetProtocolsList\GetProtocolsListTrait;
    use GetResourceSet\GetResourceSetTrait;
    use GetThirdPartyFirewallAssociationStatus\GetThirdPartyFirewallAssociationStatusTrait;
    use GetViolationDetails\GetViolationDetailsTrait;
    use ListAdminAccountsForOrganization\ListAdminAccountsForOrganizationTrait;
    use ListAdminsManagingAccount\ListAdminsManagingAccountTrait;
    use ListAppsLists\ListAppsListsTrait;
    use ListComplianceStatus\ListComplianceStatusTrait;
    use ListDiscoveredResources\ListDiscoveredResourcesTrait;
    use ListMemberAccounts\ListMemberAccountsTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListProtocolsLists\ListProtocolsListsTrait;
    use ListResourceSetResources\ListResourceSetResourcesTrait;
    use ListResourceSets\ListResourceSetsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListThirdPartyFirewallFirewallPolicies\ListThirdPartyFirewallFirewallPoliciesTrait;
    use PutAdminAccount\PutAdminAccountTrait;
    use PutAppsList\PutAppsListTrait;
    use PutNotificationChannel\PutNotificationChannelTrait;
    use PutPolicy\PutPolicyTrait;
    use PutProtocolsList\PutProtocolsListTrait;
    use PutResourceSet\PutResourceSetTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
