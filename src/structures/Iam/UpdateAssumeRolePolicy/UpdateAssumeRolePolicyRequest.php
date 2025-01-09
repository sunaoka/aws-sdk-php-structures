<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAssumeRolePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $PolicyDocument
 */
class UpdateAssumeRolePolicyRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     PolicyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
