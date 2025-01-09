<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 */
class DeleteSnapshotScheduleRequest extends Request
{
    /**
     * @param array{VolumeARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
