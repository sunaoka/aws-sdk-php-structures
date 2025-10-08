<?php

namespace Sunaoka\Aws\Structures\Ecs;

class EcsClient extends \Aws\Ecs\EcsClient
{
    use CreateCapacityProvider\CreateCapacityProviderTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateService\CreateServiceTrait;
    use CreateTaskSet\CreateTaskSetTrait;
    use DeleteAccountSetting\DeleteAccountSettingTrait;
    use DeleteAttributes\DeleteAttributesTrait;
    use DeleteCapacityProvider\DeleteCapacityProviderTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteService\DeleteServiceTrait;
    use DeleteTaskDefinitions\DeleteTaskDefinitionsTrait;
    use DeleteTaskSet\DeleteTaskSetTrait;
    use DeregisterContainerInstance\DeregisterContainerInstanceTrait;
    use DeregisterTaskDefinition\DeregisterTaskDefinitionTrait;
    use DescribeCapacityProviders\DescribeCapacityProvidersTrait;
    use DescribeClusters\DescribeClustersTrait;
    use DescribeContainerInstances\DescribeContainerInstancesTrait;
    use DescribeServiceDeployments\DescribeServiceDeploymentsTrait;
    use DescribeServiceRevisions\DescribeServiceRevisionsTrait;
    use DescribeServices\DescribeServicesTrait;
    use DescribeTaskDefinition\DescribeTaskDefinitionTrait;
    use DescribeTaskSets\DescribeTaskSetsTrait;
    use DescribeTasks\DescribeTasksTrait;
    use DiscoverPollEndpoint\DiscoverPollEndpointTrait;
    use ExecuteCommand\ExecuteCommandTrait;
    use GetTaskProtection\GetTaskProtectionTrait;
    use ListAccountSettings\ListAccountSettingsTrait;
    use ListAttributes\ListAttributesTrait;
    use ListClusters\ListClustersTrait;
    use ListContainerInstances\ListContainerInstancesTrait;
    use ListServiceDeployments\ListServiceDeploymentsTrait;
    use ListServices\ListServicesTrait;
    use ListServicesByNamespace\ListServicesByNamespaceTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListTaskDefinitionFamilies\ListTaskDefinitionFamiliesTrait;
    use ListTaskDefinitions\ListTaskDefinitionsTrait;
    use ListTasks\ListTasksTrait;
    use PutAccountSetting\PutAccountSettingTrait;
    use PutAccountSettingDefault\PutAccountSettingDefaultTrait;
    use PutAttributes\PutAttributesTrait;
    use PutClusterCapacityProviders\PutClusterCapacityProvidersTrait;
    use RegisterContainerInstance\RegisterContainerInstanceTrait;
    use RegisterTaskDefinition\RegisterTaskDefinitionTrait;
    use RunTask\RunTaskTrait;
    use StartTask\StartTaskTrait;
    use StopServiceDeployment\StopServiceDeploymentTrait;
    use StopTask\StopTaskTrait;
    use SubmitAttachmentStateChanges\SubmitAttachmentStateChangesTrait;
    use SubmitContainerStateChange\SubmitContainerStateChangeTrait;
    use SubmitTaskStateChange\SubmitTaskStateChangeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCapacityProvider\UpdateCapacityProviderTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateClusterSettings\UpdateClusterSettingsTrait;
    use UpdateContainerAgent\UpdateContainerAgentTrait;
    use UpdateContainerInstancesState\UpdateContainerInstancesStateTrait;
    use UpdateService\UpdateServiceTrait;
    use UpdateServicePrimaryTaskSet\UpdateServicePrimaryTaskSetTrait;
    use UpdateTaskProtection\UpdateTaskProtectionTrait;
    use UpdateTaskSet\UpdateTaskSetTrait;
}
