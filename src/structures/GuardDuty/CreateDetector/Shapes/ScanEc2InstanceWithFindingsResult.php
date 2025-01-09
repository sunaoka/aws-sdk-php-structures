<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumesResult $EbsVolumes
 */
class ScanEc2InstanceWithFindingsResult extends Shape
{
    /**
     * @param array{EbsVolumes?: EbsVolumesResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
