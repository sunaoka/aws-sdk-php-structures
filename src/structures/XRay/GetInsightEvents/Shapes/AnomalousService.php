<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceId $ServiceId
 */
class AnomalousService extends Shape
{
    /**
     * @param array{ServiceId?: ServiceId} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
