<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableWorkDocs
 * @property bool|null $EnableInternetAccess
 * @property string|null $DefaultOu
 * @property string|null $CustomSecurityGroupId
 * @property bool|null $UserEnabledAsLocalAdministrator
 * @property bool|null $EnableMaintenanceMode
 */
class DefaultWorkspaceCreationProperties extends Shape
{
    /**
     * @param array{
     *     EnableWorkDocs?: bool|null,
     *     EnableInternetAccess?: bool|null,
     *     DefaultOu?: string|null,
     *     CustomSecurityGroupId?: string|null,
     *     UserEnabledAsLocalAdministrator?: bool|null,
     *     EnableMaintenanceMode?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
