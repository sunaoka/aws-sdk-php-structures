<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteStorageVirtualMachinePeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $StorageVirtualMachinePeerId
 */
class DeleteStorageVirtualMachinePeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     StorageVirtualMachinePeerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
