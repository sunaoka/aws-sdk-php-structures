<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdatePermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string|null $name
 * @property string|null $description
 * @property list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>|null $applicationPermissions
 * @property string|null $clientToken
 */
class UpdatePermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     applicationPermissions?: list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
