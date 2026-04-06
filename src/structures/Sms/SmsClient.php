<?php

namespace Sunaoka\Aws\Structures\Sms;

class SmsClient extends \Aws\Sms\SmsClient
{
    use CreateApp\CreateAppTrait;
    use CreateReplicationJob\CreateReplicationJobTrait;
    use DeleteApp\DeleteAppTrait;
    use DeleteAppLaunchConfiguration\DeleteAppLaunchConfigurationTrait;
    use DeleteAppReplicationConfiguration\DeleteAppReplicationConfigurationTrait;
    use DeleteAppValidationConfiguration\DeleteAppValidationConfigurationTrait;
    use DeleteReplicationJob\DeleteReplicationJobTrait;
    use DeleteServerCatalog\DeleteServerCatalogTrait;
    use DisassociateConnector\DisassociateConnectorTrait;
    use GenerateChangeSet\GenerateChangeSetTrait;
    use GenerateTemplate\GenerateTemplateTrait;
    use GetApp\GetAppTrait;
    use GetAppLaunchConfiguration\GetAppLaunchConfigurationTrait;
    use GetAppReplicationConfiguration\GetAppReplicationConfigurationTrait;
    use GetAppValidationConfiguration\GetAppValidationConfigurationTrait;
    use GetAppValidationOutput\GetAppValidationOutputTrait;
    use GetConnectors\GetConnectorsTrait;
    use GetReplicationJobs\GetReplicationJobsTrait;
    use GetReplicationRuns\GetReplicationRunsTrait;
    use GetServers\GetServersTrait;
    use ImportAppCatalog\ImportAppCatalogTrait;
    use ImportServerCatalog\ImportServerCatalogTrait;
    use LaunchApp\LaunchAppTrait;
    use ListApps\ListAppsTrait;
    use NotifyAppValidationOutput\NotifyAppValidationOutputTrait;
    use PutAppLaunchConfiguration\PutAppLaunchConfigurationTrait;
    use PutAppReplicationConfiguration\PutAppReplicationConfigurationTrait;
    use PutAppValidationConfiguration\PutAppValidationConfigurationTrait;
    use StartAppReplication\StartAppReplicationTrait;
    use StartOnDemandAppReplication\StartOnDemandAppReplicationTrait;
    use StartOnDemandReplicationRun\StartOnDemandReplicationRunTrait;
    use StopAppReplication\StopAppReplicationTrait;
    use TerminateApp\TerminateAppTrait;
    use UpdateApp\UpdateAppTrait;
    use UpdateReplicationJob\UpdateReplicationJobTrait;
}
