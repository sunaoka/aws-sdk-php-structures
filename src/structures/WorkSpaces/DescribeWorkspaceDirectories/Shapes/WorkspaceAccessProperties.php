<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY'|null $DeviceTypeWindows
 * @property 'ALLOW'|'DENY'|null $DeviceTypeOsx
 * @property 'ALLOW'|'DENY'|null $DeviceTypeWeb
 * @property 'ALLOW'|'DENY'|null $DeviceTypeIos
 * @property 'ALLOW'|'DENY'|null $DeviceTypeAndroid
 * @property 'ALLOW'|'DENY'|null $DeviceTypeChromeOs
 * @property 'ALLOW'|'DENY'|null $DeviceTypeZeroClient
 * @property 'ALLOW'|'DENY'|null $DeviceTypeLinux
 * @property 'ALLOW'|'DENY'|null $DeviceTypeWorkSpacesThinClient
 * @property AccessEndpointConfig|null $AccessEndpointConfig
 */
class WorkspaceAccessProperties extends Shape
{
    /**
     * @param array{
     *     DeviceTypeWindows?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeOsx?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeWeb?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeIos?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeAndroid?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeChromeOs?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeZeroClient?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeLinux?: 'ALLOW'|'DENY'|null,
     *     DeviceTypeWorkSpacesThinClient?: 'ALLOW'|'DENY'|null,
     *     AccessEndpointConfig?: AccessEndpointConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
