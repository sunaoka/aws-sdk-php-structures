<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventAttributionSource
 */
class MetricAttribution extends Shape
{
    /**
     * @param array{eventAttributionSource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
