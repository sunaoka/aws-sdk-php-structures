<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteRolePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PolicyName
 */
class DeleteRolePolicyRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
