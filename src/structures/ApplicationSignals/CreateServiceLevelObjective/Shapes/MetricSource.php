<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $MetricSourceKeyAttributes
 * @property array<string, string>|null $MetricSourceAttributes
 */
class MetricSource extends Shape
{
    /**
     * @param array{
     *     MetricSourceKeyAttributes: array<string, string>,
     *     MetricSourceAttributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
