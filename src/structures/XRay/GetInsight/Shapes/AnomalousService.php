<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceId|null $ServiceId
 */
class AnomalousService extends Shape
{
    /**
     * @param array{ServiceId?: ServiceId|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
