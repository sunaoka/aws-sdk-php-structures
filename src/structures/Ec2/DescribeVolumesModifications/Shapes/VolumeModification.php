<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property 'modifying'|'optimizing'|'completed'|'failed'|null $ModificationState
 * @property string|null $StatusMessage
 * @property int|null $TargetSize
 * @property int|null $TargetIops
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $TargetVolumeType
 * @property int|null $TargetThroughput
 * @property bool|null $TargetMultiAttachEnabled
 * @property int|null $OriginalSize
 * @property int|null $OriginalIops
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $OriginalVolumeType
 * @property int|null $OriginalThroughput
 * @property bool|null $OriginalMultiAttachEnabled
 * @property int|null $Progress
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class VolumeModification extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     ModificationState?: 'modifying'|'optimizing'|'completed'|'failed'|null,
     *     StatusMessage?: string|null,
     *     TargetSize?: int|null,
     *     TargetIops?: int|null,
     *     TargetVolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     TargetThroughput?: int|null,
     *     TargetMultiAttachEnabled?: bool|null,
     *     OriginalSize?: int|null,
     *     OriginalIops?: int|null,
     *     OriginalVolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     OriginalThroughput?: int|null,
     *     OriginalMultiAttachEnabled?: bool|null,
     *     Progress?: int|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
