<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails $Primary
 * @property AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails $Secondary
 */
class AwsEventsEndpointRoutingConfigFailoverConfigDetails extends Shape
{
    /**
     * @param array{
     *     Primary?: AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails,
     *     Secondary?: AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
