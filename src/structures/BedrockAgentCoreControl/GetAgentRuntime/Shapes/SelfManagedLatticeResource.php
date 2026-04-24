<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceConfigurationIdentifier
 */
class SelfManagedLatticeResource extends Shape
{
    /**
     * @param array{resourceConfigurationIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
