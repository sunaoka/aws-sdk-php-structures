<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TestSetName'|'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class TestSetSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'TestSetName'|'LastUpdatedDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
