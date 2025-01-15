<?php

namespace Sunaoka\Aws\Structures\EventBridge\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StatementId
 * @property bool|null $RemoveAllPermissions
 * @property string|null $EventBusName
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     StatementId?: string|null,
     *     RemoveAllPermissions?: bool|null,
     *     EventBusName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
