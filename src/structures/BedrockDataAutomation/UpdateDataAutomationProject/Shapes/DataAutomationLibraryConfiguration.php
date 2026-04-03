<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataAutomationLibraryItem>|null $libraries
 */
class DataAutomationLibraryConfiguration extends Shape
{
    /**
     * @param array{libraries?: list<DataAutomationLibraryItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
