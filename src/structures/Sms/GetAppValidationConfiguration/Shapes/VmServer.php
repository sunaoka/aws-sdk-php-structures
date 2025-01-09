<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppValidationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VmServerAddress $vmServerAddress
 * @property string $vmName
 * @property string $vmManagerName
 * @property 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER' $vmManagerType
 * @property string $vmPath
 */
class VmServer extends Shape
{
    /**
     * @param array{
     *     vmServerAddress?: VmServerAddress,
     *     vmName?: string,
     *     vmManagerName?: string,
     *     vmManagerType?: 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER',
     *     vmPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
