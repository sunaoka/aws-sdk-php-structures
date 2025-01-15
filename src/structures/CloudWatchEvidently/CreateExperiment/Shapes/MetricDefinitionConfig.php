<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityIdKey
 * @property string|null $eventPattern
 * @property string $name
 * @property string|null $unitLabel
 * @property string $valueKey
 */
class MetricDefinitionConfig extends Shape
{
    /**
     * @param array{
     *     entityIdKey: string,
     *     eventPattern?: string|null,
     *     name: string,
     *     unitLabel?: string|null,
     *     valueKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
