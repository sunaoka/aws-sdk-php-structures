<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH' $confidenceLevel
 */
class ViolationEventAdditionalInfo extends Shape
{
    /**
     * @param array{confidenceLevel?: 'LOW'|'MEDIUM'|'HIGH'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
