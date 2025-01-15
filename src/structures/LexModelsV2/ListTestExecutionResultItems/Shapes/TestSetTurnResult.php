<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTurnResult|null $agent
 * @property UserTurnResult|null $user
 */
class TestSetTurnResult extends Shape
{
    /**
     * @param array{
     *     agent?: AgentTurnResult|null,
     *     user?: UserTurnResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
