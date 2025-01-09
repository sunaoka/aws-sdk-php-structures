<?php

namespace Sunaoka\Aws\Structures\RAM\DisassociateResourceSharePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $permissionArn
 * @property string $clientToken
 */
class DisassociateResourceSharePermissionRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     permissionArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
