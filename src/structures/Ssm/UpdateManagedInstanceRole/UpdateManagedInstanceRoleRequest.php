<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateManagedInstanceRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $IamRole
 */
class UpdateManagedInstanceRoleRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IamRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
