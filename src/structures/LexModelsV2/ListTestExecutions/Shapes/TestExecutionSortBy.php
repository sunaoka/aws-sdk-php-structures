<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TestSetName'|'CreationDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class TestExecutionSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'TestSetName'|'CreationDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
