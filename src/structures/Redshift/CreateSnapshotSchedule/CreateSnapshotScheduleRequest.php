<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ScheduleDefinitions
 * @property string $ScheduleIdentifier
 * @property string $ScheduleDescription
 * @property list<Shapes\Tag> $Tags
 * @property bool $DryRun
 * @property int $NextInvocations
 */
class CreateSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     ScheduleDefinitions?: list<string>,
     *     ScheduleIdentifier?: string,
     *     ScheduleDescription?: string,
     *     Tags?: list<Shapes\Tag>,
     *     DryRun?: bool,
     *     NextInvocations?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
