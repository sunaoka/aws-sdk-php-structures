<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ec2VolumeId
 * @property string $StackId
 */
class RegisterVolumeRequest extends Request
{
    /**
     * @param array{
     *     Ec2VolumeId?: string,
     *     StackId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
