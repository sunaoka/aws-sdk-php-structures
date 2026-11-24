<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapshotPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property int<0, 1023> $Count
 * @property string|null $Prefix
 * @property string|null $SnapmirrorLabel
 * @property SnapshotPolicyRetentionPeriod|null $RetentionPeriod
 */
class SnapshotPolicySchedule extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Count: int<0, 1023>,
     *     Prefix?: string|null,
     *     SnapmirrorLabel?: string|null,
     *     RetentionPeriod?: SnapshotPolicyRetentionPeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
