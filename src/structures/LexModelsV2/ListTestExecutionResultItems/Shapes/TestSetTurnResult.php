<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTurnResult $agent
 * @property UserTurnResult $user
 */
class TestSetTurnResult extends Shape
{
    /**
     * @param array{
     *     agent?: AgentTurnResult,
     *     user?: UserTurnResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
