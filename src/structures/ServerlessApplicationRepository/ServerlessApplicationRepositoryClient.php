<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository;

class ServerlessApplicationRepositoryClient extends \Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient
{
    use CreateApplication\CreateApplicationTrait;
    use CreateApplicationVersion\CreateApplicationVersionTrait;
    use CreateCloudFormationChangeSet\CreateCloudFormationChangeSetTrait;
    use CreateCloudFormationTemplate\CreateCloudFormationTemplateTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use GetApplication\GetApplicationTrait;
    use GetApplicationPolicy\GetApplicationPolicyTrait;
    use GetCloudFormationTemplate\GetCloudFormationTemplateTrait;
    use ListApplicationDependencies\ListApplicationDependenciesTrait;
    use ListApplicationVersions\ListApplicationVersionsTrait;
    use ListApplications\ListApplicationsTrait;
    use PutApplicationPolicy\PutApplicationPolicyTrait;
    use UnshareApplication\UnshareApplicationTrait;
    use UpdateApplication\UpdateApplicationTrait;
}
