<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentName
 * @property 'Matched'|'Mismatched'|'ExecutionError' $matchResult
 */
class ConversationLevelIntentClassificationResultItem extends Shape
{
    /**
     * @param array{
     *     intentName: string,
     *     matchResult: 'Matched'|'Mismatched'|'ExecutionError'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
