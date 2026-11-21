<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventBridgeConfiguration $EventBridgeConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{EventBridgeConfiguration: EventBridgeConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
