<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEventsEndpointRoutingConfigFailoverConfigDetails|null $FailoverConfig
 */
class AwsEventsEndpointRoutingConfigDetails extends Shape
{
    /**
     * @param array{FailoverConfig?: AwsEventsEndpointRoutingConfigFailoverConfigDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
