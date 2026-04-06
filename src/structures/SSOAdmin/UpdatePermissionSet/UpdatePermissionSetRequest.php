<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string|null $RelayState
 * @property string|null $SessionDuration
 */
class UpdatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     RelayState?: string|null,
     *     SessionDuration?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
