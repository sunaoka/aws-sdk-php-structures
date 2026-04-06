<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRoleCustomPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DeleteRoleCustomPermissionRequest extends Request
{
    /**
     * @param array{
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
