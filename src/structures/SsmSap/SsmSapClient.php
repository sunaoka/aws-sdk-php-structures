<?php

namespace Sunaoka\Aws\Structures\SsmSap;

class SsmSapClient extends \Aws\SsmSap\SsmSapClient
{
    use DeleteResourcePermission\DeleteResourcePermissionTrait;
    use DeregisterApplication\DeregisterApplicationTrait;
    use GetApplication\GetApplicationTrait;
    use GetComponent\GetComponentTrait;
    use GetDatabase\GetDatabaseTrait;
    use GetOperation\GetOperationTrait;
    use GetResourcePermission\GetResourcePermissionTrait;
    use ListApplications\ListApplicationsTrait;
    use ListComponents\ListComponentsTrait;
    use ListDatabases\ListDatabasesTrait;
    use ListOperationEvents\ListOperationEventsTrait;
    use ListOperations\ListOperationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePermission\PutResourcePermissionTrait;
    use RegisterApplication\RegisterApplicationTrait;
    use StartApplication\StartApplicationTrait;
    use StartApplicationRefresh\StartApplicationRefreshTrait;
    use StopApplication\StopApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplicationSettings\UpdateApplicationSettingsTrait;
}
