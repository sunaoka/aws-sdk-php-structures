<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails|null $Primary
 * @property AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails|null $Secondary
 */
class AwsEventsEndpointRoutingConfigFailoverConfigDetails extends Shape
{
    /**
     * @param array{
     *     Primary?: AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails|null,
     *     Secondary?: AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
