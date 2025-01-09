<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateSvmActiveDirectoryConfiguration $ActiveDirectoryConfiguration
 * @property string $ClientRequestToken
 * @property string $StorageVirtualMachineId
 * @property string $SvmAdminPassword
 */
class UpdateStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: Shapes\UpdateSvmActiveDirectoryConfiguration,
     *     ClientRequestToken?: string,
     *     StorageVirtualMachineId: string,
     *     SvmAdminPassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
