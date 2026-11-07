<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterDefaultHostManagementConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED' $PermissionModel
 * @property string|null $RoleArn
 * @property bool|null $Overwrite
 */
class RegisterDefaultHostManagementConfigurationRequest extends Request
{
    /**
     * @param array{
     *     PermissionModel: 'SERVICE_MANAGED'|'SELF_MANAGED',
     *     RoleArn?: string|null,
     *     Overwrite?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
