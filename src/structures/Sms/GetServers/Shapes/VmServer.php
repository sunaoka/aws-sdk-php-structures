<?php

namespace Sunaoka\Aws\Structures\Sms\GetServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VmServerAddress|null $vmServerAddress
 * @property string|null $vmName
 * @property string|null $vmManagerName
 * @property 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|null $vmManagerType
 * @property string|null $vmPath
 */
class VmServer extends Shape
{
    /**
     * @param array{
     *     vmServerAddress?: VmServerAddress|null,
     *     vmName?: string|null,
     *     vmManagerName?: string|null,
     *     vmManagerType?: 'VSPHERE'|'SCVMM'|'HYPERV-MANAGER'|null,
     *     vmPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
