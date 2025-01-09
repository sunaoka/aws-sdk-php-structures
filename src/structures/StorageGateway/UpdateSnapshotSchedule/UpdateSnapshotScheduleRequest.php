<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VolumeARN
 * @property int<0, 23> $StartAt
 * @property int<1, 24> $RecurrenceInHours
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class UpdateSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     VolumeARN: string,
     *     StartAt: int<0, 23>,
     *     RecurrenceInHours: int<1, 24>,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
