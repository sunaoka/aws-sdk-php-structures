<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Unknown
 * @property int<0, max> $Informational
 * @property int<0, max> $Low
 * @property int<0, max> $Medium
 * @property int<0, max> $High
 * @property int<0, max> $Critical
 * @property int<0, max> $Fatal
 * @property int<0, max> $Other
 */
class SeverityTrendsCount extends Shape
{
    /**
     * @param array{
     *     Unknown: int<0, max>,
     *     Informational: int<0, max>,
     *     Low: int<0, max>,
     *     Medium: int<0, max>,
     *     High: int<0, max>,
     *     Critical: int<0, max>,
     *     Fatal: int<0, max>,
     *     Other: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
