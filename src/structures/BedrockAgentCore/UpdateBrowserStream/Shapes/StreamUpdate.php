<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateBrowserStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationStreamUpdate|null $automationStreamUpdate
 */
class StreamUpdate extends Shape
{
    /**
     * @param array{automationStreamUpdate?: AutomationStreamUpdate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
