<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceCreationProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableWorkDocs
 * @property bool $EnableInternetAccess
 * @property string $DefaultOu
 * @property string $CustomSecurityGroupId
 * @property bool $UserEnabledAsLocalAdministrator
 * @property bool $EnableMaintenanceMode
 * @property string $InstanceIamRoleArn
 */
class WorkspaceCreationProperties extends Shape
{
    /**
     * @param array{
     *     EnableWorkDocs?: bool,
     *     EnableInternetAccess?: bool,
     *     DefaultOu?: string,
     *     CustomSecurityGroupId?: string,
     *     UserEnabledAsLocalAdministrator?: bool,
     *     EnableMaintenanceMode?: bool,
     *     InstanceIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
