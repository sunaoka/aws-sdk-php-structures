<?php

namespace Sunaoka\Aws\Structures\AppConfig;

class AppConfigClient extends \Aws\AppConfig\AppConfigClient
{
    use CreateApplication\CreateApplicationTrait;
    use CreateConfigurationProfile\CreateConfigurationProfileTrait;
    use CreateDeploymentStrategy\CreateDeploymentStrategyTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreateExtension\CreateExtensionTrait;
    use CreateExtensionAssociation\CreateExtensionAssociationTrait;
    use CreateHostedConfigurationVersion\CreateHostedConfigurationVersionTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteConfigurationProfile\DeleteConfigurationProfileTrait;
    use DeleteDeploymentStrategy\DeleteDeploymentStrategyTrait;
    use DeleteEnvironment\DeleteEnvironmentTrait;
    use DeleteExtension\DeleteExtensionTrait;
    use DeleteExtensionAssociation\DeleteExtensionAssociationTrait;
    use DeleteHostedConfigurationVersion\DeleteHostedConfigurationVersionTrait;
    use GetAccountSettings\GetAccountSettingsTrait;
    use GetApplication\GetApplicationTrait;
    use GetConfiguration\GetConfigurationTrait;
    use GetConfigurationProfile\GetConfigurationProfileTrait;
    use GetDeployment\GetDeploymentTrait;
    use GetDeploymentStrategy\GetDeploymentStrategyTrait;
    use GetEnvironment\GetEnvironmentTrait;
    use GetExtension\GetExtensionTrait;
    use GetExtensionAssociation\GetExtensionAssociationTrait;
    use GetHostedConfigurationVersion\GetHostedConfigurationVersionTrait;
    use ListApplications\ListApplicationsTrait;
    use ListConfigurationProfiles\ListConfigurationProfilesTrait;
    use ListDeploymentStrategies\ListDeploymentStrategiesTrait;
    use ListDeployments\ListDeploymentsTrait;
    use ListEnvironments\ListEnvironmentsTrait;
    use ListExtensionAssociations\ListExtensionAssociationsTrait;
    use ListExtensions\ListExtensionsTrait;
    use ListHostedConfigurationVersions\ListHostedConfigurationVersionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartDeployment\StartDeploymentTrait;
    use StopDeployment\StopDeploymentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateConfigurationProfile\UpdateConfigurationProfileTrait;
    use UpdateDeploymentStrategy\UpdateDeploymentStrategyTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateExtension\UpdateExtensionTrait;
    use UpdateExtensionAssociation\UpdateExtensionAssociationTrait;
    use ValidateConfiguration\ValidateConfigurationTrait;
}
