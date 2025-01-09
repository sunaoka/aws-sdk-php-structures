<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class ExportSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'LastUpdatedDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
