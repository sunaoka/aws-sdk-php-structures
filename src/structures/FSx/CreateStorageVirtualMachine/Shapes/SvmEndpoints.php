<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SvmEndpoint|null $Iscsi
 * @property SvmEndpoint|null $Management
 * @property SvmEndpoint|null $Nfs
 * @property SvmEndpoint|null $Smb
 */
class SvmEndpoints extends Shape
{
    /**
     * @param array{
     *     Iscsi?: SvmEndpoint|null,
     *     Management?: SvmEndpoint|null,
     *     Nfs?: SvmEndpoint|null,
     *     Smb?: SvmEndpoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
