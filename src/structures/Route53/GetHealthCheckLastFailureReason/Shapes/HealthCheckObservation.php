<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckLastFailureReason\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'|null $Region
 * @property string|null $IPAddress
 * @property StatusReport|null $StatusReport
 */
class HealthCheckObservation extends Shape
{
    /**
     * @param array{
     *     Region?: 'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'|null,
     *     IPAddress?: string|null,
     *     StatusReport?: StatusReport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
