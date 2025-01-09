<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateDRTRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleArn
 */
class AssociateDRTRoleRequest extends Request
{
    /**
     * @param array{RoleArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
