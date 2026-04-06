<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceCreationProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableWorkDocs
 * @property bool|null $EnableInternetAccess
 * @property string|null $DefaultOu
 * @property string|null $CustomSecurityGroupId
 * @property bool|null $UserEnabledAsLocalAdministrator
 * @property bool|null $EnableMaintenanceMode
 * @property string|null $InstanceIamRoleArn
 */
class WorkspaceCreationProperties extends Shape
{
    /**
     * @param array{
     *     EnableWorkDocs?: bool|null,
     *     EnableInternetAccess?: bool|null,
     *     DefaultOu?: string|null,
     *     CustomSecurityGroupId?: string|null,
     *     UserEnabledAsLocalAdministrator?: bool|null,
     *     EnableMaintenanceMode?: bool|null,
     *     InstanceIamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
