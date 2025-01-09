<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $eventBridgeEnabled
 */
class EventOrchestration extends Shape
{
    /**
     * @param array{eventBridgeEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
