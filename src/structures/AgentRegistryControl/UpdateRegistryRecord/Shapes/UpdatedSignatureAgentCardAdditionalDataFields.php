<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedBotCategory|null $category
 */
class UpdatedSignatureAgentCardAdditionalDataFields extends Shape
{
    /**
     * @param array{category?: UpdatedBotCategory|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
