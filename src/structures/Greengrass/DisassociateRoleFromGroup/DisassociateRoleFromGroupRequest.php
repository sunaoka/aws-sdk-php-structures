<?php

namespace Sunaoka\Aws\Structures\Greengrass\DisassociateRoleFromGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class DisassociateRoleFromGroupRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
