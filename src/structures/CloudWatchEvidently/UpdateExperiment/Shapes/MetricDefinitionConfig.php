<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityIdKey
 * @property string $eventPattern
 * @property string $name
 * @property string $unitLabel
 * @property string $valueKey
 */
class MetricDefinitionConfig extends Shape
{
    /**
     * @param array{
     *     entityIdKey: string,
     *     eventPattern?: string,
     *     name: string,
     *     unitLabel?: string,
     *     valueKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
