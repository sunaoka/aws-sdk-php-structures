<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\UpdateSvmActiveDirectoryConfiguration|null $ActiveDirectoryConfiguration
 * @property string|null $ClientRequestToken
 * @property string $StorageVirtualMachineId
 * @property string|null $SvmAdminPassword
 */
class UpdateStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ActiveDirectoryConfiguration?: Shapes\UpdateSvmActiveDirectoryConfiguration|null,
     *     ClientRequestToken?: string|null,
     *     StorageVirtualMachineId: string,
     *     SvmAdminPassword?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
