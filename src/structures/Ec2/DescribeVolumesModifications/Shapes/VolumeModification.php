<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumesModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 * @property 'modifying'|'optimizing'|'completed'|'failed' $ModificationState
 * @property string $StatusMessage
 * @property int $TargetSize
 * @property int $TargetIops
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $TargetVolumeType
 * @property int $TargetThroughput
 * @property bool $TargetMultiAttachEnabled
 * @property int $OriginalSize
 * @property int $OriginalIops
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $OriginalVolumeType
 * @property int $OriginalThroughput
 * @property bool $OriginalMultiAttachEnabled
 * @property int $Progress
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class VolumeModification extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string,
     *     ModificationState?: 'modifying'|'optimizing'|'completed'|'failed',
     *     StatusMessage?: string,
     *     TargetSize?: int,
     *     TargetIops?: int,
     *     TargetVolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     TargetThroughput?: int,
     *     TargetMultiAttachEnabled?: bool,
     *     OriginalSize?: int,
     *     OriginalIops?: int,
     *     OriginalVolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     OriginalThroughput?: int,
     *     OriginalMultiAttachEnabled?: bool,
     *     Progress?: int,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
