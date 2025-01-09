<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRolePermissionsBoundary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 */
class DeleteRolePermissionsBoundaryRequest extends Request
{
    /**
     * @param array{RoleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
