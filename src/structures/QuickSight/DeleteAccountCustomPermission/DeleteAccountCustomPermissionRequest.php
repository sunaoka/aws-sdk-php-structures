<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccountCustomPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DeleteAccountCustomPermissionRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
