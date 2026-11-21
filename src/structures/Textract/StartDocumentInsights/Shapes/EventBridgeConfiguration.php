<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $State
 */
class EventBridgeConfiguration extends Shape
{
    /**
     * @param array{State: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
