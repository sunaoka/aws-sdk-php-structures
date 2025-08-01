<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAutoScalingAutoScalingGroupDetails|null $AwsAutoScalingAutoScalingGroup
 * @property AwsCodeBuildProjectDetails|null $AwsCodeBuildProject
 * @property AwsCloudFrontDistributionDetails|null $AwsCloudFrontDistribution
 * @property AwsEc2InstanceDetails|null $AwsEc2Instance
 * @property AwsEc2NetworkInterfaceDetails|null $AwsEc2NetworkInterface
 * @property AwsEc2SecurityGroupDetails|null $AwsEc2SecurityGroup
 * @property AwsEc2VolumeDetails|null $AwsEc2Volume
 * @property AwsEc2VpcDetails|null $AwsEc2Vpc
 * @property AwsEc2EipDetails|null $AwsEc2Eip
 * @property AwsEc2SubnetDetails|null $AwsEc2Subnet
 * @property AwsEc2NetworkAclDetails|null $AwsEc2NetworkAcl
 * @property AwsElbv2LoadBalancerDetails|null $AwsElbv2LoadBalancer
 * @property AwsElasticBeanstalkEnvironmentDetails|null $AwsElasticBeanstalkEnvironment
 * @property AwsElasticsearchDomainDetails|null $AwsElasticsearchDomain
 * @property AwsS3BucketDetails|null $AwsS3Bucket
 * @property AwsS3AccountPublicAccessBlockDetails|null $AwsS3AccountPublicAccessBlock
 * @property AwsS3ObjectDetails|null $AwsS3Object
 * @property AwsSecretsManagerSecretDetails|null $AwsSecretsManagerSecret
 * @property AwsIamAccessKeyDetails|null $AwsIamAccessKey
 * @property AwsIamUserDetails|null $AwsIamUser
 * @property AwsIamPolicyDetails|null $AwsIamPolicy
 * @property AwsApiGatewayV2StageDetails|null $AwsApiGatewayV2Stage
 * @property AwsApiGatewayV2ApiDetails|null $AwsApiGatewayV2Api
 * @property AwsDynamoDbTableDetails|null $AwsDynamoDbTable
 * @property AwsApiGatewayStageDetails|null $AwsApiGatewayStage
 * @property AwsApiGatewayRestApiDetails|null $AwsApiGatewayRestApi
 * @property AwsCloudTrailTrailDetails|null $AwsCloudTrailTrail
 * @property AwsSsmPatchComplianceDetails|null $AwsSsmPatchCompliance
 * @property AwsCertificateManagerCertificateDetails|null $AwsCertificateManagerCertificate
 * @property AwsRedshiftClusterDetails|null $AwsRedshiftCluster
 * @property AwsElbLoadBalancerDetails|null $AwsElbLoadBalancer
 * @property AwsIamGroupDetails|null $AwsIamGroup
 * @property AwsIamRoleDetails|null $AwsIamRole
 * @property AwsKmsKeyDetails|null $AwsKmsKey
 * @property AwsLambdaFunctionDetails|null $AwsLambdaFunction
 * @property AwsLambdaLayerVersionDetails|null $AwsLambdaLayerVersion
 * @property AwsRdsDbInstanceDetails|null $AwsRdsDbInstance
 * @property AwsSnsTopicDetails|null $AwsSnsTopic
 * @property AwsSqsQueueDetails|null $AwsSqsQueue
 * @property AwsWafWebAclDetails|null $AwsWafWebAcl
 * @property AwsRdsDbSnapshotDetails|null $AwsRdsDbSnapshot
 * @property AwsRdsDbClusterSnapshotDetails|null $AwsRdsDbClusterSnapshot
 * @property AwsRdsDbClusterDetails|null $AwsRdsDbCluster
 * @property AwsEcsClusterDetails|null $AwsEcsCluster
 * @property AwsEcsContainerDetails|null $AwsEcsContainer
 * @property AwsEcsTaskDefinitionDetails|null $AwsEcsTaskDefinition
 * @property ContainerDetails|null $Container
 * @property array<string, string>|null $Other
 * @property AwsRdsEventSubscriptionDetails|null $AwsRdsEventSubscription
 * @property AwsEcsServiceDetails|null $AwsEcsService
 * @property AwsAutoScalingLaunchConfigurationDetails|null $AwsAutoScalingLaunchConfiguration
 * @property AwsEc2VpnConnectionDetails|null $AwsEc2VpnConnection
 * @property AwsEcrContainerImageDetails|null $AwsEcrContainerImage
 * @property AwsOpenSearchServiceDomainDetails|null $AwsOpenSearchServiceDomain
 * @property AwsEc2VpcEndpointServiceDetails|null $AwsEc2VpcEndpointService
 * @property AwsXrayEncryptionConfigDetails|null $AwsXrayEncryptionConfig
 * @property AwsWafRateBasedRuleDetails|null $AwsWafRateBasedRule
 * @property AwsWafRegionalRateBasedRuleDetails|null $AwsWafRegionalRateBasedRule
 * @property AwsEcrRepositoryDetails|null $AwsEcrRepository
 * @property AwsEksClusterDetails|null $AwsEksCluster
 * @property AwsNetworkFirewallFirewallPolicyDetails|null $AwsNetworkFirewallFirewallPolicy
 * @property AwsNetworkFirewallFirewallDetails|null $AwsNetworkFirewallFirewall
 * @property AwsNetworkFirewallRuleGroupDetails|null $AwsNetworkFirewallRuleGroup
 * @property AwsRdsDbSecurityGroupDetails|null $AwsRdsDbSecurityGroup
 * @property AwsKinesisStreamDetails|null $AwsKinesisStream
 * @property AwsEc2TransitGatewayDetails|null $AwsEc2TransitGateway
 * @property AwsEfsAccessPointDetails|null $AwsEfsAccessPoint
 * @property AwsCloudFormationStackDetails|null $AwsCloudFormationStack
 * @property AwsCloudWatchAlarmDetails|null $AwsCloudWatchAlarm
 * @property AwsEc2VpcPeeringConnectionDetails|null $AwsEc2VpcPeeringConnection
 * @property AwsWafRegionalRuleGroupDetails|null $AwsWafRegionalRuleGroup
 * @property AwsWafRegionalRuleDetails|null $AwsWafRegionalRule
 * @property AwsWafRegionalWebAclDetails|null $AwsWafRegionalWebAcl
 * @property AwsWafRuleDetails|null $AwsWafRule
 * @property AwsWafRuleGroupDetails|null $AwsWafRuleGroup
 * @property AwsEcsTaskDetails|null $AwsEcsTask
 * @property AwsBackupBackupVaultDetails|null $AwsBackupBackupVault
 * @property AwsBackupBackupPlanDetails|null $AwsBackupBackupPlan
 * @property AwsBackupRecoveryPointDetails|null $AwsBackupRecoveryPoint
 * @property AwsEc2LaunchTemplateDetails|null $AwsEc2LaunchTemplate
 * @property AwsSageMakerNotebookInstanceDetails|null $AwsSageMakerNotebookInstance
 * @property AwsWafv2WebAclDetails|null $AwsWafv2WebAcl
 * @property AwsWafv2RuleGroupDetails|null $AwsWafv2RuleGroup
 * @property AwsEc2RouteTableDetails|null $AwsEc2RouteTable
 * @property AwsAmazonMqBrokerDetails|null $AwsAmazonMqBroker
 * @property AwsAppSyncGraphQlApiDetails|null $AwsAppSyncGraphQlApi
 * @property AwsEventSchemasRegistryDetails|null $AwsEventSchemasRegistry
 * @property AwsGuardDutyDetectorDetails|null $AwsGuardDutyDetector
 * @property AwsStepFunctionStateMachineDetails|null $AwsStepFunctionStateMachine
 * @property AwsAthenaWorkGroupDetails|null $AwsAthenaWorkGroup
 * @property AwsEventsEventbusDetails|null $AwsEventsEventbus
 * @property AwsDmsEndpointDetails|null $AwsDmsEndpoint
 * @property AwsEventsEndpointDetails|null $AwsEventsEndpoint
 * @property AwsDmsReplicationTaskDetails|null $AwsDmsReplicationTask
 * @property AwsDmsReplicationInstanceDetails|null $AwsDmsReplicationInstance
 * @property AwsRoute53HostedZoneDetails|null $AwsRoute53HostedZone
 * @property AwsMskClusterDetails|null $AwsMskCluster
 * @property AwsS3AccessPointDetails|null $AwsS3AccessPoint
 * @property AwsEc2ClientVpnEndpointDetails|null $AwsEc2ClientVpnEndpoint
 * @property CodeRepositoryDetails|null $CodeRepository
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     AwsAutoScalingAutoScalingGroup?: AwsAutoScalingAutoScalingGroupDetails|null,
     *     AwsCodeBuildProject?: AwsCodeBuildProjectDetails|null,
     *     AwsCloudFrontDistribution?: AwsCloudFrontDistributionDetails|null,
     *     AwsEc2Instance?: AwsEc2InstanceDetails|null,
     *     AwsEc2NetworkInterface?: AwsEc2NetworkInterfaceDetails|null,
     *     AwsEc2SecurityGroup?: AwsEc2SecurityGroupDetails|null,
     *     AwsEc2Volume?: AwsEc2VolumeDetails|null,
     *     AwsEc2Vpc?: AwsEc2VpcDetails|null,
     *     AwsEc2Eip?: AwsEc2EipDetails|null,
     *     AwsEc2Subnet?: AwsEc2SubnetDetails|null,
     *     AwsEc2NetworkAcl?: AwsEc2NetworkAclDetails|null,
     *     AwsElbv2LoadBalancer?: AwsElbv2LoadBalancerDetails|null,
     *     AwsElasticBeanstalkEnvironment?: AwsElasticBeanstalkEnvironmentDetails|null,
     *     AwsElasticsearchDomain?: AwsElasticsearchDomainDetails|null,
     *     AwsS3Bucket?: AwsS3BucketDetails|null,
     *     AwsS3AccountPublicAccessBlock?: AwsS3AccountPublicAccessBlockDetails|null,
     *     AwsS3Object?: AwsS3ObjectDetails|null,
     *     AwsSecretsManagerSecret?: AwsSecretsManagerSecretDetails|null,
     *     AwsIamAccessKey?: AwsIamAccessKeyDetails|null,
     *     AwsIamUser?: AwsIamUserDetails|null,
     *     AwsIamPolicy?: AwsIamPolicyDetails|null,
     *     AwsApiGatewayV2Stage?: AwsApiGatewayV2StageDetails|null,
     *     AwsApiGatewayV2Api?: AwsApiGatewayV2ApiDetails|null,
     *     AwsDynamoDbTable?: AwsDynamoDbTableDetails|null,
     *     AwsApiGatewayStage?: AwsApiGatewayStageDetails|null,
     *     AwsApiGatewayRestApi?: AwsApiGatewayRestApiDetails|null,
     *     AwsCloudTrailTrail?: AwsCloudTrailTrailDetails|null,
     *     AwsSsmPatchCompliance?: AwsSsmPatchComplianceDetails|null,
     *     AwsCertificateManagerCertificate?: AwsCertificateManagerCertificateDetails|null,
     *     AwsRedshiftCluster?: AwsRedshiftClusterDetails|null,
     *     AwsElbLoadBalancer?: AwsElbLoadBalancerDetails|null,
     *     AwsIamGroup?: AwsIamGroupDetails|null,
     *     AwsIamRole?: AwsIamRoleDetails|null,
     *     AwsKmsKey?: AwsKmsKeyDetails|null,
     *     AwsLambdaFunction?: AwsLambdaFunctionDetails|null,
     *     AwsLambdaLayerVersion?: AwsLambdaLayerVersionDetails|null,
     *     AwsRdsDbInstance?: AwsRdsDbInstanceDetails|null,
     *     AwsSnsTopic?: AwsSnsTopicDetails|null,
     *     AwsSqsQueue?: AwsSqsQueueDetails|null,
     *     AwsWafWebAcl?: AwsWafWebAclDetails|null,
     *     AwsRdsDbSnapshot?: AwsRdsDbSnapshotDetails|null,
     *     AwsRdsDbClusterSnapshot?: AwsRdsDbClusterSnapshotDetails|null,
     *     AwsRdsDbCluster?: AwsRdsDbClusterDetails|null,
     *     AwsEcsCluster?: AwsEcsClusterDetails|null,
     *     AwsEcsContainer?: AwsEcsContainerDetails|null,
     *     AwsEcsTaskDefinition?: AwsEcsTaskDefinitionDetails|null,
     *     Container?: ContainerDetails|null,
     *     Other?: array<string, string>|null,
     *     AwsRdsEventSubscription?: AwsRdsEventSubscriptionDetails|null,
     *     AwsEcsService?: AwsEcsServiceDetails|null,
     *     AwsAutoScalingLaunchConfiguration?: AwsAutoScalingLaunchConfigurationDetails|null,
     *     AwsEc2VpnConnection?: AwsEc2VpnConnectionDetails|null,
     *     AwsEcrContainerImage?: AwsEcrContainerImageDetails|null,
     *     AwsOpenSearchServiceDomain?: AwsOpenSearchServiceDomainDetails|null,
     *     AwsEc2VpcEndpointService?: AwsEc2VpcEndpointServiceDetails|null,
     *     AwsXrayEncryptionConfig?: AwsXrayEncryptionConfigDetails|null,
     *     AwsWafRateBasedRule?: AwsWafRateBasedRuleDetails|null,
     *     AwsWafRegionalRateBasedRule?: AwsWafRegionalRateBasedRuleDetails|null,
     *     AwsEcrRepository?: AwsEcrRepositoryDetails|null,
     *     AwsEksCluster?: AwsEksClusterDetails|null,
     *     AwsNetworkFirewallFirewallPolicy?: AwsNetworkFirewallFirewallPolicyDetails|null,
     *     AwsNetworkFirewallFirewall?: AwsNetworkFirewallFirewallDetails|null,
     *     AwsNetworkFirewallRuleGroup?: AwsNetworkFirewallRuleGroupDetails|null,
     *     AwsRdsDbSecurityGroup?: AwsRdsDbSecurityGroupDetails|null,
     *     AwsKinesisStream?: AwsKinesisStreamDetails|null,
     *     AwsEc2TransitGateway?: AwsEc2TransitGatewayDetails|null,
     *     AwsEfsAccessPoint?: AwsEfsAccessPointDetails|null,
     *     AwsCloudFormationStack?: AwsCloudFormationStackDetails|null,
     *     AwsCloudWatchAlarm?: AwsCloudWatchAlarmDetails|null,
     *     AwsEc2VpcPeeringConnection?: AwsEc2VpcPeeringConnectionDetails|null,
     *     AwsWafRegionalRuleGroup?: AwsWafRegionalRuleGroupDetails|null,
     *     AwsWafRegionalRule?: AwsWafRegionalRuleDetails|null,
     *     AwsWafRegionalWebAcl?: AwsWafRegionalWebAclDetails|null,
     *     AwsWafRule?: AwsWafRuleDetails|null,
     *     AwsWafRuleGroup?: AwsWafRuleGroupDetails|null,
     *     AwsEcsTask?: AwsEcsTaskDetails|null,
     *     AwsBackupBackupVault?: AwsBackupBackupVaultDetails|null,
     *     AwsBackupBackupPlan?: AwsBackupBackupPlanDetails|null,
     *     AwsBackupRecoveryPoint?: AwsBackupRecoveryPointDetails|null,
     *     AwsEc2LaunchTemplate?: AwsEc2LaunchTemplateDetails|null,
     *     AwsSageMakerNotebookInstance?: AwsSageMakerNotebookInstanceDetails|null,
     *     AwsWafv2WebAcl?: AwsWafv2WebAclDetails|null,
     *     AwsWafv2RuleGroup?: AwsWafv2RuleGroupDetails|null,
     *     AwsEc2RouteTable?: AwsEc2RouteTableDetails|null,
     *     AwsAmazonMqBroker?: AwsAmazonMqBrokerDetails|null,
     *     AwsAppSyncGraphQlApi?: AwsAppSyncGraphQlApiDetails|null,
     *     AwsEventSchemasRegistry?: AwsEventSchemasRegistryDetails|null,
     *     AwsGuardDutyDetector?: AwsGuardDutyDetectorDetails|null,
     *     AwsStepFunctionStateMachine?: AwsStepFunctionStateMachineDetails|null,
     *     AwsAthenaWorkGroup?: AwsAthenaWorkGroupDetails|null,
     *     AwsEventsEventbus?: AwsEventsEventbusDetails|null,
     *     AwsDmsEndpoint?: AwsDmsEndpointDetails|null,
     *     AwsEventsEndpoint?: AwsEventsEndpointDetails|null,
     *     AwsDmsReplicationTask?: AwsDmsReplicationTaskDetails|null,
     *     AwsDmsReplicationInstance?: AwsDmsReplicationInstanceDetails|null,
     *     AwsRoute53HostedZone?: AwsRoute53HostedZoneDetails|null,
     *     AwsMskCluster?: AwsMskClusterDetails|null,
     *     AwsS3AccessPoint?: AwsS3AccessPointDetails|null,
     *     AwsEc2ClientVpnEndpoint?: AwsEc2ClientVpnEndpointDetails|null,
     *     CodeRepository?: CodeRepositoryDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
