<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsVPCSecurityGroupViolation $AwsVPCSecurityGroupViolation
 * @property AwsEc2NetworkInterfaceViolation $AwsEc2NetworkInterfaceViolation
 * @property AwsEc2InstanceViolation $AwsEc2InstanceViolation
 * @property NetworkFirewallMissingFirewallViolation $NetworkFirewallMissingFirewallViolation
 * @property NetworkFirewallMissingSubnetViolation $NetworkFirewallMissingSubnetViolation
 * @property NetworkFirewallMissingExpectedRTViolation $NetworkFirewallMissingExpectedRTViolation
 * @property NetworkFirewallPolicyModifiedViolation $NetworkFirewallPolicyModifiedViolation
 * @property NetworkFirewallInternetTrafficNotInspectedViolation $NetworkFirewallInternetTrafficNotInspectedViolation
 * @property NetworkFirewallInvalidRouteConfigurationViolation $NetworkFirewallInvalidRouteConfigurationViolation
 * @property NetworkFirewallBlackHoleRouteDetectedViolation $NetworkFirewallBlackHoleRouteDetectedViolation
 * @property NetworkFirewallUnexpectedFirewallRoutesViolation $NetworkFirewallUnexpectedFirewallRoutesViolation
 * @property NetworkFirewallUnexpectedGatewayRoutesViolation $NetworkFirewallUnexpectedGatewayRoutesViolation
 * @property NetworkFirewallMissingExpectedRoutesViolation $NetworkFirewallMissingExpectedRoutesViolation
 * @property DnsRuleGroupPriorityConflictViolation $DnsRuleGroupPriorityConflictViolation
 * @property DnsDuplicateRuleGroupViolation $DnsDuplicateRuleGroupViolation
 * @property DnsRuleGroupLimitExceededViolation $DnsRuleGroupLimitExceededViolation
 * @property FirewallSubnetIsOutOfScopeViolation $FirewallSubnetIsOutOfScopeViolation
 * @property RouteHasOutOfScopeEndpointViolation $RouteHasOutOfScopeEndpointViolation
 * @property ThirdPartyFirewallMissingFirewallViolation $ThirdPartyFirewallMissingFirewallViolation
 * @property ThirdPartyFirewallMissingSubnetViolation $ThirdPartyFirewallMissingSubnetViolation
 * @property ThirdPartyFirewallMissingExpectedRouteTableViolation $ThirdPartyFirewallMissingExpectedRouteTableViolation
 * @property FirewallSubnetMissingVPCEndpointViolation $FirewallSubnetMissingVPCEndpointViolation
 * @property InvalidNetworkAclEntriesViolation $InvalidNetworkAclEntriesViolation
 * @property PossibleRemediationActions $PossibleRemediationActions
 * @property WebACLHasIncompatibleConfigurationViolation $WebACLHasIncompatibleConfigurationViolation
 * @property WebACLHasOutOfScopeResourcesViolation $WebACLHasOutOfScopeResourcesViolation
 */
class ResourceViolation extends Shape
{
    /**
     * @param array{
     *     AwsVPCSecurityGroupViolation?: AwsVPCSecurityGroupViolation,
     *     AwsEc2NetworkInterfaceViolation?: AwsEc2NetworkInterfaceViolation,
     *     AwsEc2InstanceViolation?: AwsEc2InstanceViolation,
     *     NetworkFirewallMissingFirewallViolation?: NetworkFirewallMissingFirewallViolation,
     *     NetworkFirewallMissingSubnetViolation?: NetworkFirewallMissingSubnetViolation,
     *     NetworkFirewallMissingExpectedRTViolation?: NetworkFirewallMissingExpectedRTViolation,
     *     NetworkFirewallPolicyModifiedViolation?: NetworkFirewallPolicyModifiedViolation,
     *     NetworkFirewallInternetTrafficNotInspectedViolation?: NetworkFirewallInternetTrafficNotInspectedViolation,
     *     NetworkFirewallInvalidRouteConfigurationViolation?: NetworkFirewallInvalidRouteConfigurationViolation,
     *     NetworkFirewallBlackHoleRouteDetectedViolation?: NetworkFirewallBlackHoleRouteDetectedViolation,
     *     NetworkFirewallUnexpectedFirewallRoutesViolation?: NetworkFirewallUnexpectedFirewallRoutesViolation,
     *     NetworkFirewallUnexpectedGatewayRoutesViolation?: NetworkFirewallUnexpectedGatewayRoutesViolation,
     *     NetworkFirewallMissingExpectedRoutesViolation?: NetworkFirewallMissingExpectedRoutesViolation,
     *     DnsRuleGroupPriorityConflictViolation?: DnsRuleGroupPriorityConflictViolation,
     *     DnsDuplicateRuleGroupViolation?: DnsDuplicateRuleGroupViolation,
     *     DnsRuleGroupLimitExceededViolation?: DnsRuleGroupLimitExceededViolation,
     *     FirewallSubnetIsOutOfScopeViolation?: FirewallSubnetIsOutOfScopeViolation,
     *     RouteHasOutOfScopeEndpointViolation?: RouteHasOutOfScopeEndpointViolation,
     *     ThirdPartyFirewallMissingFirewallViolation?: ThirdPartyFirewallMissingFirewallViolation,
     *     ThirdPartyFirewallMissingSubnetViolation?: ThirdPartyFirewallMissingSubnetViolation,
     *     ThirdPartyFirewallMissingExpectedRouteTableViolation?: ThirdPartyFirewallMissingExpectedRouteTableViolation,
     *     FirewallSubnetMissingVPCEndpointViolation?: FirewallSubnetMissingVPCEndpointViolation,
     *     InvalidNetworkAclEntriesViolation?: InvalidNetworkAclEntriesViolation,
     *     PossibleRemediationActions?: PossibleRemediationActions,
     *     WebACLHasIncompatibleConfigurationViolation?: WebACLHasIncompatibleConfigurationViolation,
     *     WebACLHasOutOfScopeResourcesViolation?: WebACLHasOutOfScopeResourcesViolation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
