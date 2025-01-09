<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ConversationLevelTestResultItem> $items
 */
class ConversationLevelTestResults extends Shape
{
    /**
     * @param array{items: list<ConversationLevelTestResultItem>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
