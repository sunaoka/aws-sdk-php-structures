<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $entityIdKey
 * @property string|null $eventPattern
 * @property string|null $name
 * @property string|null $unitLabel
 * @property string|null $valueKey
 */
class MetricDefinition extends Shape
{
    /**
     * @param array{
     *     entityIdKey?: string|null,
     *     eventPattern?: string|null,
     *     name?: string|null,
     *     unitLabel?: string|null,
     *     valueKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
