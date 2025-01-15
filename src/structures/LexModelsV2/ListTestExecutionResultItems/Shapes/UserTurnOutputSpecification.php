<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserTurnIntentOutput $intent
 * @property list<ActiveContext>|null $activeContexts
 * @property string|null $transcript
 */
class UserTurnOutputSpecification extends Shape
{
    /**
     * @param array{
     *     intent: UserTurnIntentOutput,
     *     activeContexts?: list<ActiveContext>|null,
     *     transcript?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
