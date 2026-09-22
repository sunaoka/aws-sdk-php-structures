<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetTelemetryQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $partialResultsDetected
 */
class PartialResults extends Shape
{
    /**
     * @param array{partialResultsDetected?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
