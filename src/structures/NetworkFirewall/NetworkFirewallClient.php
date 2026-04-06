<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall;

class NetworkFirewallClient extends \Aws\NetworkFirewall\NetworkFirewallClient
{
    use AssociateFirewallPolicy\AssociateFirewallPolicyTrait;
    use AssociateSubnets\AssociateSubnetsTrait;
    use CreateFirewall\CreateFirewallTrait;
    use CreateFirewallPolicy\CreateFirewallPolicyTrait;
    use CreateRuleGroup\CreateRuleGroupTrait;
    use CreateTLSInspectionConfiguration\CreateTLSInspectionConfigurationTrait;
    use DeleteFirewall\DeleteFirewallTrait;
    use DeleteFirewallPolicy\DeleteFirewallPolicyTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRuleGroup\DeleteRuleGroupTrait;
    use DeleteTLSInspectionConfiguration\DeleteTLSInspectionConfigurationTrait;
    use DescribeFirewall\DescribeFirewallTrait;
    use DescribeFirewallPolicy\DescribeFirewallPolicyTrait;
    use DescribeLoggingConfiguration\DescribeLoggingConfigurationTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use DescribeRuleGroup\DescribeRuleGroupTrait;
    use DescribeRuleGroupMetadata\DescribeRuleGroupMetadataTrait;
    use DescribeTLSInspectionConfiguration\DescribeTLSInspectionConfigurationTrait;
    use DisassociateSubnets\DisassociateSubnetsTrait;
    use ListFirewallPolicies\ListFirewallPoliciesTrait;
    use ListFirewalls\ListFirewallsTrait;
    use ListRuleGroups\ListRuleGroupsTrait;
    use ListTLSInspectionConfigurations\ListTLSInspectionConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateFirewallDeleteProtection\UpdateFirewallDeleteProtectionTrait;
    use UpdateFirewallDescription\UpdateFirewallDescriptionTrait;
    use UpdateFirewallEncryptionConfiguration\UpdateFirewallEncryptionConfigurationTrait;
    use UpdateFirewallPolicy\UpdateFirewallPolicyTrait;
    use UpdateFirewallPolicyChangeProtection\UpdateFirewallPolicyChangeProtectionTrait;
    use UpdateLoggingConfiguration\UpdateLoggingConfigurationTrait;
    use UpdateRuleGroup\UpdateRuleGroupTrait;
    use UpdateSubnetChangeProtection\UpdateSubnetChangeProtectionTrait;
    use UpdateTLSInspectionConfiguration\UpdateTLSInspectionConfigurationTrait;
}
