<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $confidenceLevel
 */
class ViolationEventAdditionalInfo extends Shape
{
    /**
     * @param array{confidenceLevel?: 'LOW'|'MEDIUM'|'HIGH'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
