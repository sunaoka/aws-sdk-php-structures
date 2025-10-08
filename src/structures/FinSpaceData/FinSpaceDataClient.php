<?php

namespace Sunaoka\Aws\Structures\FinSpaceData;

class FinSpaceDataClient extends \Aws\FinSpaceData\FinSpaceDataClient
{
    use AssociateUserToPermissionGroup\AssociateUserToPermissionGroupTrait;
    use CreateChangeset\CreateChangesetTrait;
    use CreateDataView\CreateDataViewTrait;
    use CreateDataset\CreateDatasetTrait;
    use CreatePermissionGroup\CreatePermissionGroupTrait;
    use CreateUser\CreateUserTrait;
    use DeleteDataset\DeleteDatasetTrait;
    use DeletePermissionGroup\DeletePermissionGroupTrait;
    use DisableUser\DisableUserTrait;
    use DisassociateUserFromPermissionGroup\DisassociateUserFromPermissionGroupTrait;
    use EnableUser\EnableUserTrait;
    use GetChangeset\GetChangesetTrait;
    use GetDataView\GetDataViewTrait;
    use GetDataset\GetDatasetTrait;
    use GetExternalDataViewAccessDetails\GetExternalDataViewAccessDetailsTrait;
    use GetPermissionGroup\GetPermissionGroupTrait;
    use GetProgrammaticAccessCredentials\GetProgrammaticAccessCredentialsTrait;
    use GetUser\GetUserTrait;
    use GetWorkingLocation\GetWorkingLocationTrait;
    use ListChangesets\ListChangesetsTrait;
    use ListDataViews\ListDataViewsTrait;
    use ListDatasets\ListDatasetsTrait;
    use ListPermissionGroups\ListPermissionGroupsTrait;
    use ListPermissionGroupsByUser\ListPermissionGroupsByUserTrait;
    use ListUsers\ListUsersTrait;
    use ListUsersByPermissionGroup\ListUsersByPermissionGroupTrait;
    use ResetUserPassword\ResetUserPasswordTrait;
    use UpdateChangeset\UpdateChangesetTrait;
    use UpdateDataset\UpdateDatasetTrait;
    use UpdatePermissionGroup\UpdatePermissionGroupTrait;
    use UpdateUser\UpdateUserTrait;
}
