<?php

namespace Sunaoka\Aws\Structures\FSx\CreateStorageVirtualMachinePeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $StorageVirtualMachineId
 * @property string $PeerSvmName
 * @property string|null $PeerClusterName
 * @property list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'> $Applications
 * @property string|null $PeerSvmAlias
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateStorageVirtualMachinePeerRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     StorageVirtualMachineId: string,
     *     PeerSvmName: string,
     *     PeerClusterName?: string|null,
     *     Applications: list<'SNAPMIRROR'|'FILE_COPY'|'LUN_COPY'|'FLEXCACHE'>,
     *     PeerSvmAlias?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
