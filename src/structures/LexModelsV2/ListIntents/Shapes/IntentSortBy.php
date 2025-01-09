<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentName'|'LastUpdatedDateTime' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class IntentSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'IntentName'|'LastUpdatedDateTime',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
