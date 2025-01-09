<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\AssociateServiceRoleToAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleArn
 */
class AssociateServiceRoleToAccountRequest extends Request
{
    /**
     * @param array{roleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
