<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsVPCSecurityGroupViolation|null $AwsVPCSecurityGroupViolation
 * @property AwsEc2NetworkInterfaceViolation|null $AwsEc2NetworkInterfaceViolation
 * @property AwsEc2InstanceViolation|null $AwsEc2InstanceViolation
 * @property NetworkFirewallMissingFirewallViolation|null $NetworkFirewallMissingFirewallViolation
 * @property NetworkFirewallMissingSubnetViolation|null $NetworkFirewallMissingSubnetViolation
 * @property NetworkFirewallMissingExpectedRTViolation|null $NetworkFirewallMissingExpectedRTViolation
 * @property NetworkFirewallPolicyModifiedViolation|null $NetworkFirewallPolicyModifiedViolation
 * @property NetworkFirewallInternetTrafficNotInspectedViolation|null $NetworkFirewallInternetTrafficNotInspectedViolation
 * @property NetworkFirewallInvalidRouteConfigurationViolation|null $NetworkFirewallInvalidRouteConfigurationViolation
 * @property NetworkFirewallBlackHoleRouteDetectedViolation|null $NetworkFirewallBlackHoleRouteDetectedViolation
 * @property NetworkFirewallUnexpectedFirewallRoutesViolation|null $NetworkFirewallUnexpectedFirewallRoutesViolation
 * @property NetworkFirewallUnexpectedGatewayRoutesViolation|null $NetworkFirewallUnexpectedGatewayRoutesViolation
 * @property NetworkFirewallMissingExpectedRoutesViolation|null $NetworkFirewallMissingExpectedRoutesViolation
 * @property DnsRuleGroupPriorityConflictViolation|null $DnsRuleGroupPriorityConflictViolation
 * @property DnsDuplicateRuleGroupViolation|null $DnsDuplicateRuleGroupViolation
 * @property DnsRuleGroupLimitExceededViolation|null $DnsRuleGroupLimitExceededViolation
 * @property FirewallSubnetIsOutOfScopeViolation|null $FirewallSubnetIsOutOfScopeViolation
 * @property RouteHasOutOfScopeEndpointViolation|null $RouteHasOutOfScopeEndpointViolation
 * @property ThirdPartyFirewallMissingFirewallViolation|null $ThirdPartyFirewallMissingFirewallViolation
 * @property ThirdPartyFirewallMissingSubnetViolation|null $ThirdPartyFirewallMissingSubnetViolation
 * @property ThirdPartyFirewallMissingExpectedRouteTableViolation|null $ThirdPartyFirewallMissingExpectedRouteTableViolation
 * @property FirewallSubnetMissingVPCEndpointViolation|null $FirewallSubnetMissingVPCEndpointViolation
 * @property InvalidNetworkAclEntriesViolation|null $InvalidNetworkAclEntriesViolation
 * @property PossibleRemediationActions|null $PossibleRemediationActions
 * @property WebACLHasIncompatibleConfigurationViolation|null $WebACLHasIncompatibleConfigurationViolation
 * @property WebACLHasOutOfScopeResourcesViolation|null $WebACLHasOutOfScopeResourcesViolation
 */
class ResourceViolation extends Shape
{
    /**
     * @param array{
     *     AwsVPCSecurityGroupViolation?: AwsVPCSecurityGroupViolation|null,
     *     AwsEc2NetworkInterfaceViolation?: AwsEc2NetworkInterfaceViolation|null,
     *     AwsEc2InstanceViolation?: AwsEc2InstanceViolation|null,
     *     NetworkFirewallMissingFirewallViolation?: NetworkFirewallMissingFirewallViolation|null,
     *     NetworkFirewallMissingSubnetViolation?: NetworkFirewallMissingSubnetViolation|null,
     *     NetworkFirewallMissingExpectedRTViolation?: NetworkFirewallMissingExpectedRTViolation|null,
     *     NetworkFirewallPolicyModifiedViolation?: NetworkFirewallPolicyModifiedViolation|null,
     *     NetworkFirewallInternetTrafficNotInspectedViolation?: NetworkFirewallInternetTrafficNotInspectedViolation|null,
     *     NetworkFirewallInvalidRouteConfigurationViolation?: NetworkFirewallInvalidRouteConfigurationViolation|null,
     *     NetworkFirewallBlackHoleRouteDetectedViolation?: NetworkFirewallBlackHoleRouteDetectedViolation|null,
     *     NetworkFirewallUnexpectedFirewallRoutesViolation?: NetworkFirewallUnexpectedFirewallRoutesViolation|null,
     *     NetworkFirewallUnexpectedGatewayRoutesViolation?: NetworkFirewallUnexpectedGatewayRoutesViolation|null,
     *     NetworkFirewallMissingExpectedRoutesViolation?: NetworkFirewallMissingExpectedRoutesViolation|null,
     *     DnsRuleGroupPriorityConflictViolation?: DnsRuleGroupPriorityConflictViolation|null,
     *     DnsDuplicateRuleGroupViolation?: DnsDuplicateRuleGroupViolation|null,
     *     DnsRuleGroupLimitExceededViolation?: DnsRuleGroupLimitExceededViolation|null,
     *     FirewallSubnetIsOutOfScopeViolation?: FirewallSubnetIsOutOfScopeViolation|null,
     *     RouteHasOutOfScopeEndpointViolation?: RouteHasOutOfScopeEndpointViolation|null,
     *     ThirdPartyFirewallMissingFirewallViolation?: ThirdPartyFirewallMissingFirewallViolation|null,
     *     ThirdPartyFirewallMissingSubnetViolation?: ThirdPartyFirewallMissingSubnetViolation|null,
     *     ThirdPartyFirewallMissingExpectedRouteTableViolation?: ThirdPartyFirewallMissingExpectedRouteTableViolation|null,
     *     FirewallSubnetMissingVPCEndpointViolation?: FirewallSubnetMissingVPCEndpointViolation|null,
     *     InvalidNetworkAclEntriesViolation?: InvalidNetworkAclEntriesViolation|null,
     *     PossibleRemediationActions?: PossibleRemediationActions|null,
     *     WebACLHasIncompatibleConfigurationViolation?: WebACLHasIncompatibleConfigurationViolation|null,
     *     WebACLHasOutOfScopeResourcesViolation?: WebACLHasOutOfScopeResourcesViolation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
