<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomConsolidationConfiguration|null $customConsolidationConfiguration
 */
class ConsolidationConfiguration extends Shape
{
    /**
     * @param array{customConsolidationConfiguration?: CustomConsolidationConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
