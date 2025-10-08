<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomConsolidationConfigurationInput|null $customConsolidationConfiguration
 */
class ModifyConsolidationConfiguration extends Shape
{
    /**
     * @param array{customConsolidationConfiguration?: CustomConsolidationConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
