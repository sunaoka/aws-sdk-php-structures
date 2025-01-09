<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdatePermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string $name
 * @property string $description
 * @property list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'> $applicationPermissions
 * @property string $clientToken
 */
class UpdatePermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     name?: string,
     *     description?: string,
     *     applicationPermissions?: list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
