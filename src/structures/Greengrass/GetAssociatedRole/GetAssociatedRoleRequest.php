<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetAssociatedRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 */
class GetAssociatedRoleRequest extends Request
{
    /**
     * @param array{GroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
