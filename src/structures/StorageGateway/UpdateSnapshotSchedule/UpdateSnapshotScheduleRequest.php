<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 * @property int $StartAt
 * @property int $RecurrenceInHours
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class UpdateSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     VolumeARN: string,
     *     StartAt: int,
     *     RecurrenceInHours: int,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
