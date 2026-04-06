<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlueprintItem>|null $blueprints
 */
class CustomOutputConfiguration extends Shape
{
    /**
     * @param array{blueprints?: list<BlueprintItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
