<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPathValue $Element
 * @property string $Color
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 */
class DataPathColor extends Shape
{
    /**
     * @param array{
     *     Element: DataPathValue,
     *     Color: string,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
