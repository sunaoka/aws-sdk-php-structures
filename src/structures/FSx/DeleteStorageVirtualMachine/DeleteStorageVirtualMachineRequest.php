<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $StorageVirtualMachineId
 */
class DeleteStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     StorageVirtualMachineId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
