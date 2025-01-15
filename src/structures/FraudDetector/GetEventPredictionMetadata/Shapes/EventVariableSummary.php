<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 * @property string|null $source
 */
class EventVariableSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null,
     *     source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
