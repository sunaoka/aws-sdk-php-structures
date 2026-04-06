<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker;

class IoTTwinMakerClient extends \Aws\IoTTwinMaker\IoTTwinMakerClient
{
    use BatchPutPropertyValues\BatchPutPropertyValuesTrait;
    use CreateComponentType\CreateComponentTypeTrait;
    use CreateEntity\CreateEntityTrait;
    use CreateScene\CreateSceneTrait;
    use CreateSyncJob\CreateSyncJobTrait;
    use CreateWorkspace\CreateWorkspaceTrait;
    use DeleteComponentType\DeleteComponentTypeTrait;
    use DeleteEntity\DeleteEntityTrait;
    use DeleteScene\DeleteSceneTrait;
    use DeleteSyncJob\DeleteSyncJobTrait;
    use DeleteWorkspace\DeleteWorkspaceTrait;
    use ExecuteQuery\ExecuteQueryTrait;
    use GetComponentType\GetComponentTypeTrait;
    use GetEntity\GetEntityTrait;
    use GetPricingPlan\GetPricingPlanTrait;
    use GetPropertyValue\GetPropertyValueTrait;
    use GetPropertyValueHistory\GetPropertyValueHistoryTrait;
    use GetScene\GetSceneTrait;
    use GetSyncJob\GetSyncJobTrait;
    use GetWorkspace\GetWorkspaceTrait;
    use ListComponentTypes\ListComponentTypesTrait;
    use ListEntities\ListEntitiesTrait;
    use ListScenes\ListScenesTrait;
    use ListSyncJobs\ListSyncJobsTrait;
    use ListSyncResources\ListSyncResourcesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkspaces\ListWorkspacesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateComponentType\UpdateComponentTypeTrait;
    use UpdateEntity\UpdateEntityTrait;
    use UpdatePricingPlan\UpdatePricingPlanTrait;
    use UpdateScene\UpdateSceneTrait;
    use UpdateWorkspace\UpdateWorkspaceTrait;
}
