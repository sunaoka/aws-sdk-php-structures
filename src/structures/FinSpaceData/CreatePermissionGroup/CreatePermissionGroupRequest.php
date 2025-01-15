<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreatePermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'> $applicationPermissions
 * @property string|null $clientToken
 */
class CreatePermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     applicationPermissions: list<'CreateDataset'|'ManageClusters'|'ManageUsersAndGroups'|'ManageAttributeSets'|'ViewAuditData'|'AccessNotebooks'|'GetTemporaryCredentials'>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
