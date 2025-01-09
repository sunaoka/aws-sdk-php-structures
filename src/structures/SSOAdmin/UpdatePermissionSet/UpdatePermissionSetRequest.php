<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string $RelayState
 * @property string $SessionDuration
 */
class UpdatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     RelayState?: string,
     *     SessionDuration?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
