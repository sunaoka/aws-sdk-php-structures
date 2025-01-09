<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Route
 */
class AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails extends Shape
{
    /**
     * @param array{Route?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
