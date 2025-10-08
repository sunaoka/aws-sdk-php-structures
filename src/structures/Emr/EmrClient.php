<?php

namespace Sunaoka\Aws\Structures\Emr;

class EmrClient extends \Aws\Emr\EmrClient
{
    use AddInstanceFleet\AddInstanceFleetTrait;
    use AddInstanceGroups\AddInstanceGroupsTrait;
    use AddJobFlowSteps\AddJobFlowStepsTrait;
    use AddTags\AddTagsTrait;
    use CancelSteps\CancelStepsTrait;
    use CreatePersistentAppUI\CreatePersistentAppUITrait;
    use CreateSecurityConfiguration\CreateSecurityConfigurationTrait;
    use CreateStudio\CreateStudioTrait;
    use CreateStudioSessionMapping\CreateStudioSessionMappingTrait;
    use DeleteSecurityConfiguration\DeleteSecurityConfigurationTrait;
    use DeleteStudio\DeleteStudioTrait;
    use DeleteStudioSessionMapping\DeleteStudioSessionMappingTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeJobFlows\DescribeJobFlowsTrait;
    use DescribeNotebookExecution\DescribeNotebookExecutionTrait;
    use DescribePersistentAppUI\DescribePersistentAppUITrait;
    use DescribeReleaseLabel\DescribeReleaseLabelTrait;
    use DescribeSecurityConfiguration\DescribeSecurityConfigurationTrait;
    use DescribeStep\DescribeStepTrait;
    use DescribeStudio\DescribeStudioTrait;
    use GetAutoTerminationPolicy\GetAutoTerminationPolicyTrait;
    use GetBlockPublicAccessConfiguration\GetBlockPublicAccessConfigurationTrait;
    use GetClusterSessionCredentials\GetClusterSessionCredentialsTrait;
    use GetManagedScalingPolicy\GetManagedScalingPolicyTrait;
    use GetOnClusterAppUIPresignedURL\GetOnClusterAppUIPresignedURLTrait;
    use GetPersistentAppUIPresignedURL\GetPersistentAppUIPresignedURLTrait;
    use GetStudioSessionMapping\GetStudioSessionMappingTrait;
    use ListBootstrapActions\ListBootstrapActionsTrait;
    use ListClusters\ListClustersTrait;
    use ListInstanceFleets\ListInstanceFleetsTrait;
    use ListInstanceGroups\ListInstanceGroupsTrait;
    use ListInstances\ListInstancesTrait;
    use ListNotebookExecutions\ListNotebookExecutionsTrait;
    use ListReleaseLabels\ListReleaseLabelsTrait;
    use ListSecurityConfigurations\ListSecurityConfigurationsTrait;
    use ListSteps\ListStepsTrait;
    use ListStudioSessionMappings\ListStudioSessionMappingsTrait;
    use ListStudios\ListStudiosTrait;
    use ListSupportedInstanceTypes\ListSupportedInstanceTypesTrait;
    use ModifyCluster\ModifyClusterTrait;
    use ModifyInstanceFleet\ModifyInstanceFleetTrait;
    use ModifyInstanceGroups\ModifyInstanceGroupsTrait;
    use PutAutoScalingPolicy\PutAutoScalingPolicyTrait;
    use PutAutoTerminationPolicy\PutAutoTerminationPolicyTrait;
    use PutBlockPublicAccessConfiguration\PutBlockPublicAccessConfigurationTrait;
    use PutManagedScalingPolicy\PutManagedScalingPolicyTrait;
    use RemoveAutoScalingPolicy\RemoveAutoScalingPolicyTrait;
    use RemoveAutoTerminationPolicy\RemoveAutoTerminationPolicyTrait;
    use RemoveManagedScalingPolicy\RemoveManagedScalingPolicyTrait;
    use RemoveTags\RemoveTagsTrait;
    use RunJobFlow\RunJobFlowTrait;
    use SetKeepJobFlowAliveWhenNoSteps\SetKeepJobFlowAliveWhenNoStepsTrait;
    use SetTerminationProtection\SetTerminationProtectionTrait;
    use SetUnhealthyNodeReplacement\SetUnhealthyNodeReplacementTrait;
    use SetVisibleToAllUsers\SetVisibleToAllUsersTrait;
    use StartNotebookExecution\StartNotebookExecutionTrait;
    use StopNotebookExecution\StopNotebookExecutionTrait;
    use TerminateJobFlows\TerminateJobFlowsTrait;
    use UpdateStudio\UpdateStudioTrait;
    use UpdateStudioSessionMapping\UpdateStudioSessionMappingTrait;
}
