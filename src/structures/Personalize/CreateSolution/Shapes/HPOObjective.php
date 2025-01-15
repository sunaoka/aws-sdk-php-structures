<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $metricName
 * @property string|null $metricRegex
 */
class HPOObjective extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     metricName?: string|null,
     *     metricRegex?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
