<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string $ColumnName
 * @property string $TagMultiValueDelimiter
 * @property string $MatchAllValue
 */
class RowLevelPermissionTagRule extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     ColumnName: string,
     *     TagMultiValueDelimiter?: string,
     *     MatchAllValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
