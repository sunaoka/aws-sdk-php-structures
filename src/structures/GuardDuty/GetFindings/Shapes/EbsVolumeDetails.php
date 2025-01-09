<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeDetail> $ScannedVolumeDetails
 * @property list<VolumeDetail> $SkippedVolumeDetails
 */
class EbsVolumeDetails extends Shape
{
    /**
     * @param array{
     *     ScannedVolumeDetails?: list<VolumeDetail>,
     *     SkippedVolumeDetails?: list<VolumeDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
