<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IntentClassificationTestResultItem> $items
 */
class IntentClassificationTestResults extends Shape
{
    /**
     * @param array{items: list<IntentClassificationTestResultItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
