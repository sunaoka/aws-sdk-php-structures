<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $labelSet
 * @property LimitsPerLabelSetEntry $limits
 */
class LimitsPerLabelSet extends Shape
{
    /**
     * @param array{
     *     labelSet: array<string, string>,
     *     limits: LimitsPerLabelSetEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
