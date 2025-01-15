<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ScheduleDefinitions
 * @property string|null $ScheduleIdentifier
 * @property string|null $ScheduleDescription
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DryRun
 * @property int|null $NextInvocations
 */
class CreateSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     ScheduleDefinitions?: list<string>|null,
     *     ScheduleIdentifier?: string|null,
     *     ScheduleDescription?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DryRun?: bool|null,
     *     NextInvocations?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
