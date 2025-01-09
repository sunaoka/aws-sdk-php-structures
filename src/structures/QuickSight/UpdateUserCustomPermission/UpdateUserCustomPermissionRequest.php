<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateUserCustomPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $CustomPermissionsName
 */
class UpdateUserCustomPermissionRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     CustomPermissionsName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
