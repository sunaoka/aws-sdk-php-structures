<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EbsVolumes
 */
class ScanEc2InstanceWithFindings extends Shape
{
    /**
     * @param array{EbsVolumes?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
