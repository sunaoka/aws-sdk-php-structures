<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeId
 * @property bool $DryRun
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{
     *     VolumeId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
