<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $IamUserArn
 * @property bool|null $AllowSsh
 * @property bool|null $AllowSudo
 * @property string|null $Level
 */
class SetPermissionRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     IamUserArn: string,
     *     AllowSsh?: bool|null,
     *     AllowSudo?: bool|null,
     *     Level?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
