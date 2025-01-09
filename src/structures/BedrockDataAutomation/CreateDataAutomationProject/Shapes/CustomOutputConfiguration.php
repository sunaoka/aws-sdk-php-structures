<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlueprintItem> $blueprints
 */
class CustomOutputConfiguration extends Shape
{
    /**
     * @param array{blueprints?: list<BlueprintItem>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
