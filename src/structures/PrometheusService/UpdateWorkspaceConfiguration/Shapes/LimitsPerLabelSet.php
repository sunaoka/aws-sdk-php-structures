<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LimitsPerLabelSetEntry $limits
 * @property array<string, string> $labelSet
 */
class LimitsPerLabelSet extends Shape
{
    /**
     * @param array{
     *     limits: LimitsPerLabelSetEntry,
     *     labelSet: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
