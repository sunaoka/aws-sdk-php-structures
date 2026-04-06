<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\UpdatePermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string|null $Description
 * @property string|null $SessionDuration
 * @property string|null $RelayState
 */
class UpdatePermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     Description?: string|null,
     *     SessionDuration?: string|null,
     *     RelayState?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
