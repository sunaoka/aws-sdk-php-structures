<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityIdKey
 * @property string $eventPattern
 * @property string $name
 * @property string $unitLabel
 * @property string $valueKey
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     entityIdKey?: string,
     *     eventPattern?: string,
     *     name?: string,
     *     unitLabel?: string,
     *     valueKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
