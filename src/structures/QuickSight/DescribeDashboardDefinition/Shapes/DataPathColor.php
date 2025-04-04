<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPathValue $Element
 * @property string $Color
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 */
class DataPathColor extends Shape
{
    /**
     * @param array{
     *     Element: DataPathValue,
     *     Color: string,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
