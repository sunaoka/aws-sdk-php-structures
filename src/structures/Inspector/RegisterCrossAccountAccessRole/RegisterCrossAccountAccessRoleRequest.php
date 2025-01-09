<?php

namespace Sunaoka\Aws\Structures\Inspector\RegisterCrossAccountAccessRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleArn
 */
class RegisterCrossAccountAccessRoleRequest extends Request
{
    /**
     * @param array{roleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
