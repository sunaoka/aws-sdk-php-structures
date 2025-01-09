<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\UpdateLogPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PatternSetName
 * @property string $PatternName
 * @property string $Pattern
 * @property int $Rank
 */
class LogPattern extends Shape
{
    /**
     * @param array{
     *     PatternSetName?: string,
     *     PatternName?: string,
     *     Pattern?: string,
     *     Rank?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
