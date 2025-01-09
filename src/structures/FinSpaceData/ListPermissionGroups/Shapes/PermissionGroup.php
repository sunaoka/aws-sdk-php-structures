<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $permissionGroupId
 * @property string $name
 * @property string $description
 * @property list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'> $applicationPermissions
 * @property int $createTime
 * @property int $lastModifiedTime
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS' $membershipStatus
 */
class PermissionGroup extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string,
     *     name?: string,
     *     description?: string,
     *     applicationPermissions?: list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>,
     *     createTime?: int,
     *     lastModifiedTime?: int,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
