<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceSharePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $permissionArn
 * @property bool $replace
 * @property string $clientToken
 * @property int $permissionVersion
 */
class AssociateResourceSharePermissionRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     permissionArn: string,
     *     replace?: bool,
     *     clientToken?: string,
     *     permissionVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
