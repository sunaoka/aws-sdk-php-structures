<?php

namespace Sunaoka\Aws\Structures\WAFV2;

class WAFV2Client extends \Aws\WAFV2\WAFV2Client
{
    use AssociateWebACL\AssociateWebACLTrait;
    use CheckCapacity\CheckCapacityTrait;
    use CreateAPIKey\CreateAPIKeyTrait;
    use CreateIPSet\CreateIPSetTrait;
    use CreateRegexPatternSet\CreateRegexPatternSetTrait;
    use CreateRuleGroup\CreateRuleGroupTrait;
    use CreateWebACL\CreateWebACLTrait;
    use DeleteAPIKey\DeleteAPIKeyTrait;
    use DeleteFirewallManagerRuleGroups\DeleteFirewallManagerRuleGroupsTrait;
    use DeleteIPSet\DeleteIPSetTrait;
    use DeleteLoggingConfiguration\DeleteLoggingConfigurationTrait;
    use DeletePermissionPolicy\DeletePermissionPolicyTrait;
    use DeleteRegexPatternSet\DeleteRegexPatternSetTrait;
    use DeleteRuleGroup\DeleteRuleGroupTrait;
    use DeleteWebACL\DeleteWebACLTrait;
    use DescribeAllManagedProducts\DescribeAllManagedProductsTrait;
    use DescribeManagedProductsByVendor\DescribeManagedProductsByVendorTrait;
    use DescribeManagedRuleGroup\DescribeManagedRuleGroupTrait;
    use DisassociateWebACL\DisassociateWebACLTrait;
    use GenerateMobileSdkReleaseUrl\GenerateMobileSdkReleaseUrlTrait;
    use GetDecryptedAPIKey\GetDecryptedAPIKeyTrait;
    use GetIPSet\GetIPSetTrait;
    use GetLoggingConfiguration\GetLoggingConfigurationTrait;
    use GetManagedRuleSet\GetManagedRuleSetTrait;
    use GetMobileSdkRelease\GetMobileSdkReleaseTrait;
    use GetPermissionPolicy\GetPermissionPolicyTrait;
    use GetRateBasedStatementManagedKeys\GetRateBasedStatementManagedKeysTrait;
    use GetRegexPatternSet\GetRegexPatternSetTrait;
    use GetRuleGroup\GetRuleGroupTrait;
    use GetSampledRequests\GetSampledRequestsTrait;
    use GetTopPathStatisticsByTraffic\GetTopPathStatisticsByTrafficTrait;
    use GetWebACL\GetWebACLTrait;
    use GetWebACLForResource\GetWebACLForResourceTrait;
    use ListAPIKeys\ListAPIKeysTrait;
    use ListAvailableManagedRuleGroupVersions\ListAvailableManagedRuleGroupVersionsTrait;
    use ListAvailableManagedRuleGroups\ListAvailableManagedRuleGroupsTrait;
    use ListIPSets\ListIPSetsTrait;
    use ListLoggingConfigurations\ListLoggingConfigurationsTrait;
    use ListManagedRuleSets\ListManagedRuleSetsTrait;
    use ListMobileSdkReleases\ListMobileSdkReleasesTrait;
    use ListRegexPatternSets\ListRegexPatternSetsTrait;
    use ListResourcesForWebACL\ListResourcesForWebACLTrait;
    use ListRuleGroups\ListRuleGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebACLs\ListWebACLsTrait;
    use PutLoggingConfiguration\PutLoggingConfigurationTrait;
    use PutManagedRuleSetVersions\PutManagedRuleSetVersionsTrait;
    use PutPermissionPolicy\PutPermissionPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIPSet\UpdateIPSetTrait;
    use UpdateManagedRuleSetVersionExpiryDate\UpdateManagedRuleSetVersionExpiryDateTrait;
    use UpdateRegexPatternSet\UpdateRegexPatternSetTrait;
    use UpdateRuleGroup\UpdateRuleGroupTrait;
    use UpdateWebACL\UpdateWebACLTrait;
}
