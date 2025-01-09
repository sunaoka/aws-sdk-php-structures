<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $IamUserArn
 * @property bool $AllowSsh
 * @property bool $AllowSudo
 * @property string $Level
 */
class SetPermissionRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     IamUserArn: string,
     *     AllowSsh?: bool,
     *     AllowSudo?: bool,
     *     Level?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
