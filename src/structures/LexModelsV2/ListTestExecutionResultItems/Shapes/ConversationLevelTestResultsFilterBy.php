<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Matched'|'Mismatched'|'ExecutionError' $endToEndResult
 */
class ConversationLevelTestResultsFilterBy extends Shape
{
    /**
     * @param array{endToEndResult?: 'Matched'|'Mismatched'|'ExecutionError'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
