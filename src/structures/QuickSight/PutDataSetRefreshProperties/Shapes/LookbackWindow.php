<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property int $Size
 * @property 'HOUR'|'DAY'|'WEEK' $SizeUnit
 */
class LookbackWindow extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     Size: int,
     *     SizeUnit: 'HOUR'|'DAY'|'WEEK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
