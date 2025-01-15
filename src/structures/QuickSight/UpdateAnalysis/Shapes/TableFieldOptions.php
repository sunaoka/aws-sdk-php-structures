<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TableFieldOption>|null $SelectedFieldOptions
 * @property list<string>|null $Order
 * @property TablePinnedFieldOptions|null $PinnedFieldOptions
 */
class TableFieldOptions extends Shape
{
    /**
     * @param array{
     *     SelectedFieldOptions?: list<TableFieldOption>|null,
     *     Order?: list<string>|null,
     *     PinnedFieldOptions?: TablePinnedFieldOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
