<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedSignatureAgentCardAdditionalDataFields|null $optionalValue
 */
class UpdatedSignatureAgentCardAdditionalData extends Shape
{
    /**
     * @param array{optionalValue?: UpdatedSignatureAgentCardAdditionalDataFields|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
