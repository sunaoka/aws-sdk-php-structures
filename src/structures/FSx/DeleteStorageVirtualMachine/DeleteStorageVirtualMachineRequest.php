<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteStorageVirtualMachine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $StorageVirtualMachineId
 */
class DeleteStorageVirtualMachineRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     StorageVirtualMachineId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
