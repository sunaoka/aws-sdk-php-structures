<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeVolumes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property string|null $StackId
 * @property string|null $RaidArrayId
 * @property list<string>|null $VolumeIds
 */
class DescribeVolumesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     StackId?: string|null,
     *     RaidArrayId?: string|null,
     *     VolumeIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
