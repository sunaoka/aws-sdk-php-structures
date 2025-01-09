<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatementId
 * @property bool $RemoveAllPermissions
 * @property string $EventBusName
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     StatementId?: string,
     *     RemoveAllPermissions?: bool,
     *     EventBusName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
