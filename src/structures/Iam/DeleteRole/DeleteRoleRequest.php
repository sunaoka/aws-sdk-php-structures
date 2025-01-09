<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 */
class DeleteRoleRequest extends Request
{
    /**
     * @param array{RoleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
