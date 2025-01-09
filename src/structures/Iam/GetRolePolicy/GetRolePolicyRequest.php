<?php

namespace Sunaoka\Aws\Structures\Iam\GetRolePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PolicyName
 */
class GetRolePolicyRequest extends Request
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
