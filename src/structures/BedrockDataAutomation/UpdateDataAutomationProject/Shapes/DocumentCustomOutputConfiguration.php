<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlueprintItem>|null $fallbackBlueprints
 */
class DocumentCustomOutputConfiguration extends Shape
{
    /**
     * @param array{fallbackBlueprints?: list<BlueprintItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
