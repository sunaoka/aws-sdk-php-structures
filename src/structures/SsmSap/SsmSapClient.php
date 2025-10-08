<?php

namespace Sunaoka\Aws\Structures\SsmSap;

class SsmSapClient extends \Aws\SsmSap\SsmSapClient
{
    use DeleteResourcePermission\DeleteResourcePermissionTrait;
    use DeregisterApplication\DeregisterApplicationTrait;
    use GetApplication\GetApplicationTrait;
    use GetComponent\GetComponentTrait;
    use GetConfigurationCheckOperation\GetConfigurationCheckOperationTrait;
    use GetDatabase\GetDatabaseTrait;
    use GetOperation\GetOperationTrait;
    use GetResourcePermission\GetResourcePermissionTrait;
    use ListApplications\ListApplicationsTrait;
    use ListComponents\ListComponentsTrait;
    use ListConfigurationCheckDefinitions\ListConfigurationCheckDefinitionsTrait;
    use ListConfigurationCheckOperations\ListConfigurationCheckOperationsTrait;
    use ListDatabases\ListDatabasesTrait;
    use ListOperationEvents\ListOperationEventsTrait;
    use ListOperations\ListOperationsTrait;
    use ListSubCheckResults\ListSubCheckResultsTrait;
    use ListSubCheckRuleResults\ListSubCheckRuleResultsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePermission\PutResourcePermissionTrait;
    use RegisterApplication\RegisterApplicationTrait;
    use StartApplication\StartApplicationTrait;
    use StartApplicationRefresh\StartApplicationRefreshTrait;
    use StartConfigurationChecks\StartConfigurationChecksTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplicationSettings\UpdateApplicationSettingsTrait;
}
