<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteCustomPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $CustomPermissionsName
 */
class DeleteCustomPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     CustomPermissionsName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
