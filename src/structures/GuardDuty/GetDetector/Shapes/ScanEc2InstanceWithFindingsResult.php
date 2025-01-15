<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumesResult|null $EbsVolumes
 */
class ScanEc2InstanceWithFindingsResult extends Shape
{
    /**
     * @param array{EbsVolumes?: EbsVolumesResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
