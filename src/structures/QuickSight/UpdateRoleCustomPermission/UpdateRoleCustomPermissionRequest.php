<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRoleCustomPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomPermissionsName
 * @property 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class UpdateRoleCustomPermissionRequest extends Request
{
    /**
     * @param array{
     *     CustomPermissionsName: string,
     *     Role: 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
