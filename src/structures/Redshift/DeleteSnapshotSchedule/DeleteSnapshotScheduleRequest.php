<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduleIdentifier
 */
class DeleteSnapshotScheduleRequest extends Request
{
    /**
     * @param array{ScheduleIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
