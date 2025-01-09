<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 * @property string $Reason
 */
class EbsVolumesResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED',
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
