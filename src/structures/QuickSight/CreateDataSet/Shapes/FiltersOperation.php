<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Alias
 * @property TransformOperationSource $Source
 * @property list<FilterOperation> $FilterOperations
 */
class FiltersOperation extends Shape
{
    /**
     * @param array{
     *     Alias: string,
     *     Source: TransformOperationSource,
     *     FilterOperations: list<FilterOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
