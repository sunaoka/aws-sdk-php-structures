<?php

namespace Sunaoka\Aws\Structures\Iam\GetRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 */
class GetRoleRequest extends Request
{
    /**
     * @param array{RoleName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
