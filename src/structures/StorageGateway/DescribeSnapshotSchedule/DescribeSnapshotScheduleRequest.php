<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 */
class DescribeSnapshotScheduleRequest extends Request
{
    /**
     * @param array{VolumeARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
