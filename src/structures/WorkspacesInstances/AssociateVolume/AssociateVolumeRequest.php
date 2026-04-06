<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\AssociateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 * @property string $VolumeId
 * @property string $Device
 */
class AssociateVolumeRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceInstanceId: string,
     *     VolumeId: string,
     *     Device: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
