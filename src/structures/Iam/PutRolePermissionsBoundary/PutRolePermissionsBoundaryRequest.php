<?php

namespace Sunaoka\Aws\Structures\Iam\PutRolePermissionsBoundary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PermissionsBoundary
 */
class PutRolePermissionsBoundaryRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PermissionsBoundary: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
