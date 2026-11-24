<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateStorageVirtualMachinePeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $StorageVirtualMachinePeerId
 * @property list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'>|null $Applications
 * @property string|null $PeerSvmAlias
 * @property 'PEERED'|'REJECTED'|'SUSPENDED'|null $State
 */
class UpdateStorageVirtualMachinePeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     StorageVirtualMachinePeerId: string,
     *     Applications?: list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'>|null,
     *     PeerSvmAlias?: string|null,
     *     State?: 'PEERED'|'REJECTED'|'SUSPENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
