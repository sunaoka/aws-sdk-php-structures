<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifySnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ScheduleIdentifier
 * @property list<string> $ScheduleDefinitions
 */
class ModifySnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     ScheduleIdentifier: string,
     *     ScheduleDefinitions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
