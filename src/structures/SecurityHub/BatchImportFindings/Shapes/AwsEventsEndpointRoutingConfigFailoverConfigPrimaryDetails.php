<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HealthCheck
 */
class AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails extends Shape
{
    /**
     * @param array{HealthCheck?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
