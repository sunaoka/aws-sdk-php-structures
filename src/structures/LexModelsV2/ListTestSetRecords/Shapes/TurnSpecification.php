<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentTurnSpecification $agentTurn
 * @property UserTurnSpecification $userTurn
 */
class TurnSpecification extends Shape
{
    /**
     * @param array{
     *     agentTurn?: AgentTurnSpecification,
     *     userTurn?: UserTurnSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
