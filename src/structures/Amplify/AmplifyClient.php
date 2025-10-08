<?php

namespace Sunaoka\Aws\Structures\Amplify;

class AmplifyClient extends \Aws\Amplify\AmplifyClient
{
    use CreateApp\CreateAppTrait;
    use CreateBackendEnvironment\CreateBackendEnvironmentTrait;
    use CreateBranch\CreateBranchTrait;
    use CreateDeployment\CreateDeploymentTrait;
    use CreateDomainAssociation\CreateDomainAssociationTrait;
    use CreateWebhook\CreateWebhookTrait;
    use DeleteApp\DeleteAppTrait;
    use DeleteBackendEnvironment\DeleteBackendEnvironmentTrait;
    use DeleteBranch\DeleteBranchTrait;
    use DeleteDomainAssociation\DeleteDomainAssociationTrait;
    use DeleteJob\DeleteJobTrait;
    use DeleteWebhook\DeleteWebhookTrait;
    use GenerateAccessLogs\GenerateAccessLogsTrait;
    use GetApp\GetAppTrait;
    use GetArtifactUrl\GetArtifactUrlTrait;
    use GetBackendEnvironment\GetBackendEnvironmentTrait;
    use GetBranch\GetBranchTrait;
    use GetDomainAssociation\GetDomainAssociationTrait;
    use GetJob\GetJobTrait;
    use GetWebhook\GetWebhookTrait;
    use ListApps\ListAppsTrait;
    use ListArtifacts\ListArtifactsTrait;
    use ListBackendEnvironments\ListBackendEnvironmentsTrait;
    use ListBranches\ListBranchesTrait;
    use ListDomainAssociations\ListDomainAssociationsTrait;
    use ListJobs\ListJobsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWebhooks\ListWebhooksTrait;
    use StartDeployment\StartDeploymentTrait;
    use StartJob\StartJobTrait;
    use StopJob\StopJobTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApp\UpdateAppTrait;
    use UpdateBranch\UpdateBranchTrait;
    use UpdateDomainAssociation\UpdateDomainAssociationTrait;
    use UpdateWebhook\UpdateWebhookTrait;
}
