<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HealthCheck
 */
class AwsEventsEndpointRoutingConfigFailoverConfigPrimaryDetails extends Shape
{
    /**
     * @param array{HealthCheck?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
