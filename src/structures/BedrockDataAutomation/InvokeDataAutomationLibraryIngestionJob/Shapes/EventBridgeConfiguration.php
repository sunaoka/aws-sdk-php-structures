<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $eventBridgeEnabled
 */
class EventBridgeConfiguration extends Shape
{
    /**
     * @param array{eventBridgeEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
