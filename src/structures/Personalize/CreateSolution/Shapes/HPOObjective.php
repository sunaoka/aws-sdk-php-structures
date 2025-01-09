<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property string $metricName
 * @property string $metricRegex
 */
class HPOObjective extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     metricName?: string,
     *     metricRegex?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
