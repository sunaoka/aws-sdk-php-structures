<?php

namespace Sunaoka\Aws\Structures\Honeycode\GetScreenData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $rowId
 * @property list<DataItem> $dataItems
 */
class ResultRow extends Shape
{
    /**
     * @param array{
     *     rowId?: string|null,
     *     dataItems: list<DataItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
