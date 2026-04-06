<?php

namespace Sunaoka\Aws\Structures\SageMaker\AttachClusterNodeVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $NodeId
 * @property string $VolumeId
 */
class AttachClusterNodeVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     NodeId: string,
     *     VolumeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
