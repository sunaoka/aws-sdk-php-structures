<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomPermissionsName
 * @property string $AwsAccountId
 */
class UpdateAccountCustomPermissionRequest extends Request
{
    /**
     * @param array{
     *     CustomPermissionsName: string,
     *     AwsAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
