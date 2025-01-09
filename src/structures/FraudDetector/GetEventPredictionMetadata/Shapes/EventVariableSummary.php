<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $value
 * @property string $source
 */
class EventVariableSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     value?: string,
     *     source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
