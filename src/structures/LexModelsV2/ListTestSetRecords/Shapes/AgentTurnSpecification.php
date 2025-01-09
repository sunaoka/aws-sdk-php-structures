<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentPrompt
 */
class AgentTurnSpecification extends Shape
{
    /**
     * @param array{agentPrompt: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
