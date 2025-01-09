<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AcceptedRouteCount
 * @property \Aws\Api\DateTimeResult $LastStatusChange
 * @property string $OutsideIpAddress
 * @property 'UP'|'DOWN' $Status
 * @property string $StatusMessage
 * @property string $CertificateArn
 */
class VgwTelemetry extends Shape
{
    /**
     * @param array{
     *     AcceptedRouteCount?: int,
     *     LastStatusChange?: \Aws\Api\DateTimeResult,
     *     OutsideIpAddress?: string,
     *     Status?: 'UP'|'DOWN',
     *     StatusMessage?: string,
     *     CertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
