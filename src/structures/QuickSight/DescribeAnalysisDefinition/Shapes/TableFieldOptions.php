<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableFieldOption>|null $SelectedFieldOptions
 * @property list<string>|null $Order
 */
class TableFieldOptions extends Shape
{
    /**
     * @param array{
     *     SelectedFieldOptions?: list<TableFieldOption>|null,
     *     Order?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
