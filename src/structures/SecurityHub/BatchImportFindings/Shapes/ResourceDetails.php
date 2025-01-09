<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAutoScalingAutoScalingGroupDetails $AwsAutoScalingAutoScalingGroup
 * @property AwsCodeBuildProjectDetails $AwsCodeBuildProject
 * @property AwsCloudFrontDistributionDetails $AwsCloudFrontDistribution
 * @property AwsEc2InstanceDetails $AwsEc2Instance
 * @property AwsEc2NetworkInterfaceDetails $AwsEc2NetworkInterface
 * @property AwsEc2SecurityGroupDetails $AwsEc2SecurityGroup
 * @property AwsEc2VolumeDetails $AwsEc2Volume
 * @property AwsEc2VpcDetails $AwsEc2Vpc
 * @property AwsEc2EipDetails $AwsEc2Eip
 * @property AwsEc2SubnetDetails $AwsEc2Subnet
 * @property AwsEc2NetworkAclDetails $AwsEc2NetworkAcl
 * @property AwsElbv2LoadBalancerDetails $AwsElbv2LoadBalancer
 * @property AwsElasticBeanstalkEnvironmentDetails $AwsElasticBeanstalkEnvironment
 * @property AwsElasticsearchDomainDetails $AwsElasticsearchDomain
 * @property AwsS3BucketDetails $AwsS3Bucket
 * @property AwsS3AccountPublicAccessBlockDetails $AwsS3AccountPublicAccessBlock
 * @property AwsS3ObjectDetails $AwsS3Object
 * @property AwsSecretsManagerSecretDetails $AwsSecretsManagerSecret
 * @property AwsIamAccessKeyDetails $AwsIamAccessKey
 * @property AwsIamUserDetails $AwsIamUser
 * @property AwsIamPolicyDetails $AwsIamPolicy
 * @property AwsApiGatewayV2StageDetails $AwsApiGatewayV2Stage
 * @property AwsApiGatewayV2ApiDetails $AwsApiGatewayV2Api
 * @property AwsDynamoDbTableDetails $AwsDynamoDbTable
 * @property AwsApiGatewayStageDetails $AwsApiGatewayStage
 * @property AwsApiGatewayRestApiDetails $AwsApiGatewayRestApi
 * @property AwsCloudTrailTrailDetails $AwsCloudTrailTrail
 * @property AwsSsmPatchComplianceDetails $AwsSsmPatchCompliance
 * @property AwsCertificateManagerCertificateDetails $AwsCertificateManagerCertificate
 * @property AwsRedshiftClusterDetails $AwsRedshiftCluster
 * @property AwsElbLoadBalancerDetails $AwsElbLoadBalancer
 * @property AwsIamGroupDetails $AwsIamGroup
 * @property AwsIamRoleDetails $AwsIamRole
 * @property AwsKmsKeyDetails $AwsKmsKey
 * @property AwsLambdaFunctionDetails $AwsLambdaFunction
 * @property AwsLambdaLayerVersionDetails $AwsLambdaLayerVersion
 * @property AwsRdsDbInstanceDetails $AwsRdsDbInstance
 * @property AwsSnsTopicDetails $AwsSnsTopic
 * @property AwsSqsQueueDetails $AwsSqsQueue
 * @property AwsWafWebAclDetails $AwsWafWebAcl
 * @property AwsRdsDbSnapshotDetails $AwsRdsDbSnapshot
 * @property AwsRdsDbClusterSnapshotDetails $AwsRdsDbClusterSnapshot
 * @property AwsRdsDbClusterDetails $AwsRdsDbCluster
 * @property AwsEcsClusterDetails $AwsEcsCluster
 * @property AwsEcsContainerDetails $AwsEcsContainer
 * @property AwsEcsTaskDefinitionDetails $AwsEcsTaskDefinition
 * @property ContainerDetails $Container
 * @property array<string, string> $Other
 * @property AwsRdsEventSubscriptionDetails $AwsRdsEventSubscription
 * @property AwsEcsServiceDetails $AwsEcsService
 * @property AwsAutoScalingLaunchConfigurationDetails $AwsAutoScalingLaunchConfiguration
 * @property AwsEc2VpnConnectionDetails $AwsEc2VpnConnection
 * @property AwsEcrContainerImageDetails $AwsEcrContainerImage
 * @property AwsOpenSearchServiceDomainDetails $AwsOpenSearchServiceDomain
 * @property AwsEc2VpcEndpointServiceDetails $AwsEc2VpcEndpointService
 * @property AwsXrayEncryptionConfigDetails $AwsXrayEncryptionConfig
 * @property AwsWafRateBasedRuleDetails $AwsWafRateBasedRule
 * @property AwsWafRegionalRateBasedRuleDetails $AwsWafRegionalRateBasedRule
 * @property AwsEcrRepositoryDetails $AwsEcrRepository
 * @property AwsEksClusterDetails $AwsEksCluster
 * @property AwsNetworkFirewallFirewallPolicyDetails $AwsNetworkFirewallFirewallPolicy
 * @property AwsNetworkFirewallFirewallDetails $AwsNetworkFirewallFirewall
 * @property AwsNetworkFirewallRuleGroupDetails $AwsNetworkFirewallRuleGroup
 * @property AwsRdsDbSecurityGroupDetails $AwsRdsDbSecurityGroup
 * @property AwsKinesisStreamDetails $AwsKinesisStream
 * @property AwsEc2TransitGatewayDetails $AwsEc2TransitGateway
 * @property AwsEfsAccessPointDetails $AwsEfsAccessPoint
 * @property AwsCloudFormationStackDetails $AwsCloudFormationStack
 * @property AwsCloudWatchAlarmDetails $AwsCloudWatchAlarm
 * @property AwsEc2VpcPeeringConnectionDetails $AwsEc2VpcPeeringConnection
 * @property AwsWafRegionalRuleGroupDetails $AwsWafRegionalRuleGroup
 * @property AwsWafRegionalRuleDetails $AwsWafRegionalRule
 * @property AwsWafRegionalWebAclDetails $AwsWafRegionalWebAcl
 * @property AwsWafRuleDetails $AwsWafRule
 * @property AwsWafRuleGroupDetails $AwsWafRuleGroup
 * @property AwsEcsTaskDetails $AwsEcsTask
 * @property AwsBackupBackupVaultDetails $AwsBackupBackupVault
 * @property AwsBackupBackupPlanDetails $AwsBackupBackupPlan
 * @property AwsBackupRecoveryPointDetails $AwsBackupRecoveryPoint
 * @property AwsEc2LaunchTemplateDetails $AwsEc2LaunchTemplate
 * @property AwsSageMakerNotebookInstanceDetails $AwsSageMakerNotebookInstance
 * @property AwsWafv2WebAclDetails $AwsWafv2WebAcl
 * @property AwsWafv2RuleGroupDetails $AwsWafv2RuleGroup
 * @property AwsEc2RouteTableDetails $AwsEc2RouteTable
 * @property AwsAmazonMqBrokerDetails $AwsAmazonMqBroker
 * @property AwsAppSyncGraphQlApiDetails $AwsAppSyncGraphQlApi
 * @property AwsEventSchemasRegistryDetails $AwsEventSchemasRegistry
 * @property AwsGuardDutyDetectorDetails $AwsGuardDutyDetector
 * @property AwsStepFunctionStateMachineDetails $AwsStepFunctionStateMachine
 * @property AwsAthenaWorkGroupDetails $AwsAthenaWorkGroup
 * @property AwsEventsEventbusDetails $AwsEventsEventbus
 * @property AwsDmsEndpointDetails $AwsDmsEndpoint
 * @property AwsEventsEndpointDetails $AwsEventsEndpoint
 * @property AwsDmsReplicationTaskDetails $AwsDmsReplicationTask
 * @property AwsDmsReplicationInstanceDetails $AwsDmsReplicationInstance
 * @property AwsRoute53HostedZoneDetails $AwsRoute53HostedZone
 * @property AwsMskClusterDetails $AwsMskCluster
 * @property AwsS3AccessPointDetails $AwsS3AccessPoint
 * @property AwsEc2ClientVpnEndpointDetails $AwsEc2ClientVpnEndpoint
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     AwsAutoScalingAutoScalingGroup?: AwsAutoScalingAutoScalingGroupDetails,
     *     AwsCodeBuildProject?: AwsCodeBuildProjectDetails,
     *     AwsCloudFrontDistribution?: AwsCloudFrontDistributionDetails,
     *     AwsEc2Instance?: AwsEc2InstanceDetails,
     *     AwsEc2NetworkInterface?: AwsEc2NetworkInterfaceDetails,
     *     AwsEc2SecurityGroup?: AwsEc2SecurityGroupDetails,
     *     AwsEc2Volume?: AwsEc2VolumeDetails,
     *     AwsEc2Vpc?: AwsEc2VpcDetails,
     *     AwsEc2Eip?: AwsEc2EipDetails,
     *     AwsEc2Subnet?: AwsEc2SubnetDetails,
     *     AwsEc2NetworkAcl?: AwsEc2NetworkAclDetails,
     *     AwsElbv2LoadBalancer?: AwsElbv2LoadBalancerDetails,
     *     AwsElasticBeanstalkEnvironment?: AwsElasticBeanstalkEnvironmentDetails,
     *     AwsElasticsearchDomain?: AwsElasticsearchDomainDetails,
     *     AwsS3Bucket?: AwsS3BucketDetails,
     *     AwsS3AccountPublicAccessBlock?: AwsS3AccountPublicAccessBlockDetails,
     *     AwsS3Object?: AwsS3ObjectDetails,
     *     AwsSecretsManagerSecret?: AwsSecretsManagerSecretDetails,
     *     AwsIamAccessKey?: AwsIamAccessKeyDetails,
     *     AwsIamUser?: AwsIamUserDetails,
     *     AwsIamPolicy?: AwsIamPolicyDetails,
     *     AwsApiGatewayV2Stage?: AwsApiGatewayV2StageDetails,
     *     AwsApiGatewayV2Api?: AwsApiGatewayV2ApiDetails,
     *     AwsDynamoDbTable?: AwsDynamoDbTableDetails,
     *     AwsApiGatewayStage?: AwsApiGatewayStageDetails,
     *     AwsApiGatewayRestApi?: AwsApiGatewayRestApiDetails,
     *     AwsCloudTrailTrail?: AwsCloudTrailTrailDetails,
     *     AwsSsmPatchCompliance?: AwsSsmPatchComplianceDetails,
     *     AwsCertificateManagerCertificate?: AwsCertificateManagerCertificateDetails,
     *     AwsRedshiftCluster?: AwsRedshiftClusterDetails,
     *     AwsElbLoadBalancer?: AwsElbLoadBalancerDetails,
     *     AwsIamGroup?: AwsIamGroupDetails,
     *     AwsIamRole?: AwsIamRoleDetails,
     *     AwsKmsKey?: AwsKmsKeyDetails,
     *     AwsLambdaFunction?: AwsLambdaFunctionDetails,
     *     AwsLambdaLayerVersion?: AwsLambdaLayerVersionDetails,
     *     AwsRdsDbInstance?: AwsRdsDbInstanceDetails,
     *     AwsSnsTopic?: AwsSnsTopicDetails,
     *     AwsSqsQueue?: AwsSqsQueueDetails,
     *     AwsWafWebAcl?: AwsWafWebAclDetails,
     *     AwsRdsDbSnapshot?: AwsRdsDbSnapshotDetails,
     *     AwsRdsDbClusterSnapshot?: AwsRdsDbClusterSnapshotDetails,
     *     AwsRdsDbCluster?: AwsRdsDbClusterDetails,
     *     AwsEcsCluster?: AwsEcsClusterDetails,
     *     AwsEcsContainer?: AwsEcsContainerDetails,
     *     AwsEcsTaskDefinition?: AwsEcsTaskDefinitionDetails,
     *     Container?: ContainerDetails,
     *     Other?: array<string, string>,
     *     AwsRdsEventSubscription?: AwsRdsEventSubscriptionDetails,
     *     AwsEcsService?: AwsEcsServiceDetails,
     *     AwsAutoScalingLaunchConfiguration?: AwsAutoScalingLaunchConfigurationDetails,
     *     AwsEc2VpnConnection?: AwsEc2VpnConnectionDetails,
     *     AwsEcrContainerImage?: AwsEcrContainerImageDetails,
     *     AwsOpenSearchServiceDomain?: AwsOpenSearchServiceDomainDetails,
     *     AwsEc2VpcEndpointService?: AwsEc2VpcEndpointServiceDetails,
     *     AwsXrayEncryptionConfig?: AwsXrayEncryptionConfigDetails,
     *     AwsWafRateBasedRule?: AwsWafRateBasedRuleDetails,
     *     AwsWafRegionalRateBasedRule?: AwsWafRegionalRateBasedRuleDetails,
     *     AwsEcrRepository?: AwsEcrRepositoryDetails,
     *     AwsEksCluster?: AwsEksClusterDetails,
     *     AwsNetworkFirewallFirewallPolicy?: AwsNetworkFirewallFirewallPolicyDetails,
     *     AwsNetworkFirewallFirewall?: AwsNetworkFirewallFirewallDetails,
     *     AwsNetworkFirewallRuleGroup?: AwsNetworkFirewallRuleGroupDetails,
     *     AwsRdsDbSecurityGroup?: AwsRdsDbSecurityGroupDetails,
     *     AwsKinesisStream?: AwsKinesisStreamDetails,
     *     AwsEc2TransitGateway?: AwsEc2TransitGatewayDetails,
     *     AwsEfsAccessPoint?: AwsEfsAccessPointDetails,
     *     AwsCloudFormationStack?: AwsCloudFormationStackDetails,
     *     AwsCloudWatchAlarm?: AwsCloudWatchAlarmDetails,
     *     AwsEc2VpcPeeringConnection?: AwsEc2VpcPeeringConnectionDetails,
     *     AwsWafRegionalRuleGroup?: AwsWafRegionalRuleGroupDetails,
     *     AwsWafRegionalRule?: AwsWafRegionalRuleDetails,
     *     AwsWafRegionalWebAcl?: AwsWafRegionalWebAclDetails,
     *     AwsWafRule?: AwsWafRuleDetails,
     *     AwsWafRuleGroup?: AwsWafRuleGroupDetails,
     *     AwsEcsTask?: AwsEcsTaskDetails,
     *     AwsBackupBackupVault?: AwsBackupBackupVaultDetails,
     *     AwsBackupBackupPlan?: AwsBackupBackupPlanDetails,
     *     AwsBackupRecoveryPoint?: AwsBackupRecoveryPointDetails,
     *     AwsEc2LaunchTemplate?: AwsEc2LaunchTemplateDetails,
     *     AwsSageMakerNotebookInstance?: AwsSageMakerNotebookInstanceDetails,
     *     AwsWafv2WebAcl?: AwsWafv2WebAclDetails,
     *     AwsWafv2RuleGroup?: AwsWafv2RuleGroupDetails,
     *     AwsEc2RouteTable?: AwsEc2RouteTableDetails,
     *     AwsAmazonMqBroker?: AwsAmazonMqBrokerDetails,
     *     AwsAppSyncGraphQlApi?: AwsAppSyncGraphQlApiDetails,
     *     AwsEventSchemasRegistry?: AwsEventSchemasRegistryDetails,
     *     AwsGuardDutyDetector?: AwsGuardDutyDetectorDetails,
     *     AwsStepFunctionStateMachine?: AwsStepFunctionStateMachineDetails,
     *     AwsAthenaWorkGroup?: AwsAthenaWorkGroupDetails,
     *     AwsEventsEventbus?: AwsEventsEventbusDetails,
     *     AwsDmsEndpoint?: AwsDmsEndpointDetails,
     *     AwsEventsEndpoint?: AwsEventsEndpointDetails,
     *     AwsDmsReplicationTask?: AwsDmsReplicationTaskDetails,
     *     AwsDmsReplicationInstance?: AwsDmsReplicationInstanceDetails,
     *     AwsRoute53HostedZone?: AwsRoute53HostedZoneDetails,
     *     AwsMskCluster?: AwsMskClusterDetails,
     *     AwsS3AccessPoint?: AwsS3AccessPointDetails,
     *     AwsEc2ClientVpnEndpoint?: AwsEc2ClientVpnEndpointDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
