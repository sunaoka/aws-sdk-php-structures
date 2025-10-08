<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall;

class NetworkFirewallClient extends \Aws\NetworkFirewall\NetworkFirewallClient
{
    use AcceptNetworkFirewallTransitGatewayAttachment\AcceptNetworkFirewallTransitGatewayAttachmentTrait;
    use AssociateAvailabilityZones\AssociateAvailabilityZonesTrait;
    use AssociateFirewallPolicy\AssociateFirewallPolicyTrait;
    use AssociateSubnets\AssociateSubnetsTrait;
    use CreateFirewall\CreateFirewallTrait;
    use CreateFirewallPolicy\CreateFirewallPolicyTrait;
    use CreateRuleGroup\CreateRuleGroupTrait;
    use CreateTLSInspectionConfiguration\CreateTLSInspectionConfigurationTrait;
    use CreateVpcEndpointAssociation\CreateVpcEndpointAssociationTrait;
    use DeleteFirewall\DeleteFirewallTrait;
    use DeleteFirewallPolicy\DeleteFirewallPolicyTrait;
    use DeleteNetworkFirewallTransitGatewayAttachment\DeleteNetworkFirewallTransitGatewayAttachmentTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRuleGroup\DeleteRuleGroupTrait;
    use DeleteTLSInspectionConfiguration\DeleteTLSInspectionConfigurationTrait;
    use DeleteVpcEndpointAssociation\DeleteVpcEndpointAssociationTrait;
    use DescribeFirewall\DescribeFirewallTrait;
    use DescribeFirewallMetadata\DescribeFirewallMetadataTrait;
    use DescribeFirewallPolicy\DescribeFirewallPolicyTrait;
    use DescribeFlowOperation\DescribeFlowOperationTrait;
    use DescribeLoggingConfiguration\DescribeLoggingConfigurationTrait;
    use DescribeResourcePolicy\DescribeResourcePolicyTrait;
    use DescribeRuleGroup\DescribeRuleGroupTrait;
    use DescribeRuleGroupMetadata\DescribeRuleGroupMetadataTrait;
    use DescribeRuleGroupSummary\DescribeRuleGroupSummaryTrait;
    use DescribeTLSInspectionConfiguration\DescribeTLSInspectionConfigurationTrait;
    use DescribeVpcEndpointAssociation\DescribeVpcEndpointAssociationTrait;
    use DisassociateAvailabilityZones\DisassociateAvailabilityZonesTrait;
    use DisassociateSubnets\DisassociateSubnetsTrait;
    use GetAnalysisReportResults\GetAnalysisReportResultsTrait;
    use ListAnalysisReports\ListAnalysisReportsTrait;
    use ListFirewallPolicies\ListFirewallPoliciesTrait;
    use ListFirewalls\ListFirewallsTrait;
    use ListFlowOperationResults\ListFlowOperationResultsTrait;
    use ListFlowOperations\ListFlowOperationsTrait;
    use ListRuleGroups\ListRuleGroupsTrait;
    use ListTLSInspectionConfigurations\ListTLSInspectionConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVpcEndpointAssociations\ListVpcEndpointAssociationsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RejectNetworkFirewallTransitGatewayAttachment\RejectNetworkFirewallTransitGatewayAttachmentTrait;
    use StartAnalysisReport\StartAnalysisReportTrait;
    use StartFlowCapture\StartFlowCaptureTrait;
    use StartFlowFlush\StartFlowFlushTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAvailabilityZoneChangeProtection\UpdateAvailabilityZoneChangeProtectionTrait;
    use UpdateFirewallAnalysisSettings\UpdateFirewallAnalysisSettingsTrait;
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
