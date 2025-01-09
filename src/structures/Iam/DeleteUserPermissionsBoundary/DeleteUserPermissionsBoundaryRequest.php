<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteUserPermissionsBoundary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 */
class DeleteUserPermissionsBoundaryRequest extends Request
{
    /**
     * @param array{UserName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
