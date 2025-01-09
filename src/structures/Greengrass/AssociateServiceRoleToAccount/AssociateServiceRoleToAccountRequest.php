<?php

namespace Sunaoka\Aws\Structures\Greengrass\AssociateServiceRoleToAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 */
class AssociateServiceRoleToAccountRequest extends Request
{
    /**
     * @param array{RoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
