<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PatternSetName
 * @property string|null $PatternName
 * @property string|null $Pattern
 * @property int|null $Rank
 */
class LogPattern extends Shape
{
    /**
     * @param array{
     *     PatternSetName?: string|null,
     *     PatternName?: string|null,
     *     Pattern?: string|null,
     *     Rank?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
