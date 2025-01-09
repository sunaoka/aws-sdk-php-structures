<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $StackId
 * @property string $RaidArrayId
 * @property list<string> $VolumeIds
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     StackId?: string,
     *     RaidArrayId?: string,
     *     VolumeIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
