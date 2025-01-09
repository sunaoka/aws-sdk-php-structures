<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetModelVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngestedEventsTimeWindow $ingestedEventsTimeWindow
 */
class IngestedEventsDetail extends Shape
{
    /**
     * @param array{ingestedEventsTimeWindow: IngestedEventsTimeWindow} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
