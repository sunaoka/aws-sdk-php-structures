<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTENT_BASED' $DeduplicationType
 */
class DeduplicationConfiguration extends Shape
{
    /**
     * @param array{DeduplicationType: 'CONTENT_BASED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
