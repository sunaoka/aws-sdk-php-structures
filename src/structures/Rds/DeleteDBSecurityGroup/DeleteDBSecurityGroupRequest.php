<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBSecurityGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSecurityGroupName
 */
class DeleteDBSecurityGroupRequest extends Request
{
    /**
     * @param array{DBSecurityGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
