<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceAccessProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY' $DeviceTypeWindows
 * @property 'ALLOW'|'DENY' $DeviceTypeOsx
 * @property 'ALLOW'|'DENY' $DeviceTypeWeb
 * @property 'ALLOW'|'DENY' $DeviceTypeIos
 * @property 'ALLOW'|'DENY' $DeviceTypeAndroid
 * @property 'ALLOW'|'DENY' $DeviceTypeChromeOs
 * @property 'ALLOW'|'DENY' $DeviceTypeZeroClient
 * @property 'ALLOW'|'DENY' $DeviceTypeLinux
 */
class WorkspaceAccessProperties extends Shape
{
    /**
     * @param array{
     *     DeviceTypeWindows?: 'ALLOW'|'DENY',
     *     DeviceTypeOsx?: 'ALLOW'|'DENY',
     *     DeviceTypeWeb?: 'ALLOW'|'DENY',
     *     DeviceTypeIos?: 'ALLOW'|'DENY',
     *     DeviceTypeAndroid?: 'ALLOW'|'DENY',
     *     DeviceTypeChromeOs?: 'ALLOW'|'DENY',
     *     DeviceTypeZeroClient?: 'ALLOW'|'DENY',
     *     DeviceTypeLinux?: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
