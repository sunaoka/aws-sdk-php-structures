<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTurnSpecification|null $agentTurn
 * @property UserTurnSpecification|null $userTurn
 */
class TurnSpecification extends Shape
{
    /**
     * @param array{
     *     agentTurn?: AgentTurnSpecification|null,
     *     userTurn?: UserTurnSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
