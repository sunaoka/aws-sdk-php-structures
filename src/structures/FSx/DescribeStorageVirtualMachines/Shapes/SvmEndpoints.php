<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeStorageVirtualMachines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SvmEndpoint $Iscsi
 * @property SvmEndpoint $Management
 * @property SvmEndpoint $Nfs
 * @property SvmEndpoint $Smb
 */
class SvmEndpoints extends Shape
{
    /**
     * @param array{
     *     Iscsi?: SvmEndpoint,
     *     Management?: SvmEndpoint,
     *     Nfs?: SvmEndpoint,
     *     Smb?: SvmEndpoint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
