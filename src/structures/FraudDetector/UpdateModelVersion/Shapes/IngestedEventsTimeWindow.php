<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property string $endTime
 */
class IngestedEventsTimeWindow extends Shape
{
    /**
     * @param array{
     *     startTime: string,
     *     endTime: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
