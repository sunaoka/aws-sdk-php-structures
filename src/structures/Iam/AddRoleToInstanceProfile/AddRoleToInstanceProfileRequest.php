<?php

namespace Sunaoka\Aws\Structures\Iam\AddRoleToInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property string $RoleName
 */
class AddRoleToInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     RoleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
