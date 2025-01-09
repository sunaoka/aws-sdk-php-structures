<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class CloudTrailConfigurationResult extends Shape
{
    /**
     * @param array{Status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
