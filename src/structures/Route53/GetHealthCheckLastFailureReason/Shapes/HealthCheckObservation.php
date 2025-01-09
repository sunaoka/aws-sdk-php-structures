<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckLastFailureReason\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1' $Region
 * @property string $IPAddress
 * @property StatusReport $StatusReport
 */
class HealthCheckObservation extends Shape
{
    /**
     * @param array{
     *     Region?: 'us-east-1'|'us-west-1'|'us-west-2'|'eu-west-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1',
     *     IPAddress?: string,
     *     StatusReport?: StatusReport
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
