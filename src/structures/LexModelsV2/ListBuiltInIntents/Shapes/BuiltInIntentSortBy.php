<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBuiltInIntents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentSignature' $attribute
 * @property 'Ascending'|'Descending' $order
 */
class BuiltInIntentSortBy extends Shape
{
    /**
     * @param array{
     *     attribute: 'IntentSignature',
     *     order: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
