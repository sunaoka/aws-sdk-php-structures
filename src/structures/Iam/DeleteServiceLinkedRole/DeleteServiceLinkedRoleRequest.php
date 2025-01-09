<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServiceLinkedRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 */
class DeleteServiceLinkedRoleRequest extends Request
{
    /**
     * @param array{RoleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
