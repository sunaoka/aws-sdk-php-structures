<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces;

class MigrationHubRefactorSpacesClient extends \Aws\MigrationHubRefactorSpaces\MigrationHubRefactorSpacesClient
{
    use CreateApplication\CreateApplicationTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateRoute\CreateRouteTrait;
    use CreateService\CreateServiceTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteRoute\DeleteRouteTrait;
    use DeleteService\DeleteServiceTrait;
    use GetApplication\GetApplicationTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetRoute\GetRouteTrait;
    use GetService\GetServiceTrait;
    use ListApplications\ListApplicationsTrait;
    use ListEnvironmentVpcs\ListEnvironmentVpcsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListRoutes\ListRoutesTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateRoute\UpdateRouteTrait;
}
