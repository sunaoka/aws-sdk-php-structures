<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $permissionGroupId
 * @property string|null $name
 * @property string|null $description
 * @property list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>|null $applicationPermissions
 * @property int|null $createTime
 * @property int|null $lastModifiedTime
 * @property 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null $membershipStatus
 */
class PermissionGroup extends Shape
{
    /**
     * @param array{
     *     permissionGroupId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     applicationPermissions?: list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>|null,
     *     createTime?: int|null,
     *     lastModifiedTime?: int|null,
     *     membershipStatus?: 'ADDITION_IN_PROGRESS'|'ADDITION_SUCCESS'|'REMOVAL_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
