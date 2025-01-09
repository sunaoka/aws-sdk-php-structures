<?php

namespace Sunaoka\Aws\Structures\Iam\AttachRolePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PolicyArn
 */
class AttachRolePolicyRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
