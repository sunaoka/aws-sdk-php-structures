<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEventsEndpointRoutingConfigFailoverConfigDetails $FailoverConfig
 */
class AwsEventsEndpointRoutingConfigDetails extends Shape
{
    /**
     * @param array{FailoverConfig?: AwsEventsEndpointRoutingConfigFailoverConfigDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
