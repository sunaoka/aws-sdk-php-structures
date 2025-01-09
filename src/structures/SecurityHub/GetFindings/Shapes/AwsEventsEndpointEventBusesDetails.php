<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventBusArn
 */
class AwsEventsEndpointEventBusesDetails extends Shape
{
    /**
     * @param array{EventBusArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
