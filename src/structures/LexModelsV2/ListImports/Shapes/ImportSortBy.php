<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class ImportSortBy extends Shape
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
