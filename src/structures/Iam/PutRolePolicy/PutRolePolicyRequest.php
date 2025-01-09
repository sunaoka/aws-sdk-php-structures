<?php

namespace Sunaoka\Aws\Structures\Iam\PutRolePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PolicyName
 * @property string $PolicyDocument
 */
class PutRolePolicyRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PolicyName: string,
     *     PolicyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
