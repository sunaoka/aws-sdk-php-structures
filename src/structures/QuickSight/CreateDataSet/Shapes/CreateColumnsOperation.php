<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Alias
 * @property TransformOperationSource|null $Source
 * @property list<CalculatedColumn> $Columns
 */
class CreateColumnsOperation extends Shape
{
    /**
     * @param array{
     *     Alias?: string|null,
     *     Source?: TransformOperationSource|null,
     *     Columns: list<CalculatedColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
