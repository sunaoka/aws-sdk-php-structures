<?php

namespace Sunaoka\Aws\Structures\CodeDeploy;

class CodeDeployClient extends \Aws\CodeDeploy\CodeDeployClient
{
    use AddTagsToOnPremisesInstances\AddTagsToOnPremisesInstancesTrait;
    use BatchGetApplicationRevisions\BatchGetApplicationRevisionsTrait;
    use BatchGetApplications\BatchGetApplicationsTrait;
    use BatchGetDeploymentGroups\BatchGetDeploymentGroupsTrait;
    use BatchGetDeploymentInstances\BatchGetDeploymentInstancesTrait;
    use BatchGetDeploymentTargets\BatchGetDeploymentTargetsTrait;
    use BatchGetDeployments\BatchGetDeploymentsTrait;
    use BatchGetOnPremisesInstances\BatchGetOnPremisesInstancesTrait;
    use ContinueDeployment\ContinueDeploymentTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateDeployment\CreateDeploymentTrait;
    use CreateDeploymentConfig\CreateDeploymentConfigTrait;
    use CreateDeploymentGroup\CreateDeploymentGroupTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteDeploymentConfig\DeleteDeploymentConfigTrait;
    use DeleteDeploymentGroup\DeleteDeploymentGroupTrait;
    use DeleteGitHubAccountToken\DeleteGitHubAccountTokenTrait;
    use DeleteResourcesByExternalId\DeleteResourcesByExternalIdTrait;
    use DeregisterOnPremisesInstance\DeregisterOnPremisesInstanceTrait;
    use GetApplication\GetApplicationTrait;
    use GetApplicationRevision\GetApplicationRevisionTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetDeploymentConfig\GetDeploymentConfigTrait;
    use GetDeploymentGroup\GetDeploymentGroupTrait;
    use GetDeploymentInstance\GetDeploymentInstanceTrait;
    use GetDeploymentTarget\GetDeploymentTargetTrait;
    use GetOnPremisesInstance\GetOnPremisesInstanceTrait;
    use ListApplicationRevisions\ListApplicationRevisionsTrait;
    use ListApplications\ListApplicationsTrait;
    use ListDeploymentConfigs\ListDeploymentConfigsTrait;
    use ListDeploymentGroups\ListDeploymentGroupsTrait;
    use ListDeploymentInstances\ListDeploymentInstancesTrait;
    use ListDeploymentTargets\ListDeploymentTargetsTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListGitHubAccountTokenNames\ListGitHubAccountTokenNamesTrait;
    use ListOnPremisesInstances\ListOnPremisesInstancesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutLifecycleEventHookExecutionStatus\PutLifecycleEventHookExecutionStatusTrait;
    use RegisterApplicationRevision\RegisterApplicationRevisionTrait;
    use RegisterOnPremisesInstance\RegisterOnPremisesInstanceTrait;
    use RemoveTagsFromOnPremisesInstances\RemoveTagsFromOnPremisesInstancesTrait;
    use SkipWaitTimeForInstanceTermination\SkipWaitTimeForInstanceTerminationTrait;
    use StopDeployment\StopDeploymentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateDeploymentGroup\UpdateDeploymentGroupTrait;
}
