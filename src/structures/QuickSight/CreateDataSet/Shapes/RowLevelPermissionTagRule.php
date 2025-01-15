<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string $ColumnName
 * @property string|null $TagMultiValueDelimiter
 * @property string|null $MatchAllValue
 */
class RowLevelPermissionTagRule extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     ColumnName: string,
     *     TagMultiValueDelimiter?: string|null,
     *     MatchAllValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
