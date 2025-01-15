<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeDetail>|null $ScannedVolumeDetails
 * @property list<VolumeDetail>|null $SkippedVolumeDetails
 */
class EbsVolumeDetails extends Shape
{
    /**
     * @param array{
     *     ScannedVolumeDetails?: list<VolumeDetail>|null,
     *     SkippedVolumeDetails?: list<VolumeDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
