<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventBridgeConfiguration $eventBridgeConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{eventBridgeConfiguration: EventBridgeConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
