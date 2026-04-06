<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\DisassociateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 * @property string $VolumeId
 * @property string|null $Device
 * @property 'FORCE'|'NO_FORCE'|null $DisassociateMode
 */
class DisassociateVolumeRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceInstanceId: string,
     *     VolumeId: string,
     *     Device?: string|null,
     *     DisassociateMode?: 'FORCE'|'NO_FORCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
