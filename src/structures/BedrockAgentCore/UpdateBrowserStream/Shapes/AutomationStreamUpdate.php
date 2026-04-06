<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateBrowserStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $streamStatus
 */
class AutomationStreamUpdate extends Shape
{
    /**
     * @param array{streamStatus?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
