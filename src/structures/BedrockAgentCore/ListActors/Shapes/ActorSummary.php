<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListActors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actorId
 */
class ActorSummary extends Shape
{
    /**
     * @param array{actorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
