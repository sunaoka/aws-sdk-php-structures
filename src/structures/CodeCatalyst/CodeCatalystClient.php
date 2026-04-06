<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst;

class CodeCatalystClient extends \Aws\CodeCatalyst\CodeCatalystClient
{
    use CreateAccessToken\CreateAccessTokenTrait;
    use CreateDevEnvironment\CreateDevEnvironmentTrait;
    use CreateProject\CreateProjectTrait;
    use CreateSourceRepository\CreateSourceRepositoryTrait;
    use CreateSourceRepositoryBranch\CreateSourceRepositoryBranchTrait;
    use DeleteAccessToken\DeleteAccessTokenTrait;
    use DeleteDevEnvironment\DeleteDevEnvironmentTrait;
    use DeleteProject\DeleteProjectTrait;
    use DeleteSourceRepository\DeleteSourceRepositoryTrait;
    use DeleteSpace\DeleteSpaceTrait;
    use GetDevEnvironment\GetDevEnvironmentTrait;
    use GetProject\GetProjectTrait;
    use GetSourceRepository\GetSourceRepositoryTrait;
    use GetSourceRepositoryCloneUrls\GetSourceRepositoryCloneUrlsTrait;
    use GetSpace\GetSpaceTrait;
    use GetSubscription\GetSubscriptionTrait;
    use GetUserDetails\GetUserDetailsTrait;
    use GetWorkflow\GetWorkflowTrait;
    use GetWorkflowRun\GetWorkflowRunTrait;
    use ListAccessTokens\ListAccessTokensTrait;
    use ListDevEnvironmentSessions\ListDevEnvironmentSessionsTrait;
    use ListDevEnvironments\ListDevEnvironmentsTrait;
    use ListEventLogs\ListEventLogsTrait;
    use ListProjects\ListProjectsTrait;
    use ListSourceRepositories\ListSourceRepositoriesTrait;
    use ListSourceRepositoryBranches\ListSourceRepositoryBranchesTrait;
    use ListSpaces\ListSpacesTrait;
    use ListWorkflowRuns\ListWorkflowRunsTrait;
    use ListWorkflows\ListWorkflowsTrait;
    use StartDevEnvironment\StartDevEnvironmentTrait;
    use StartDevEnvironmentSession\StartDevEnvironmentSessionTrait;
    use StartWorkflowRun\StartWorkflowRunTrait;
    use StopDevEnvironment\StopDevEnvironmentTrait;
    use StopDevEnvironmentSession\StopDevEnvironmentSessionTrait;
    use UpdateDevEnvironment\UpdateDevEnvironmentTrait;
    use UpdateProject\UpdateProjectTrait;
    use UpdateSpace\UpdateSpaceTrait;
    use VerifySession\VerifySessionTrait;
}
