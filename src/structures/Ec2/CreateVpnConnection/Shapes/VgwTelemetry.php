<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AcceptedRouteCount
 * @property \Aws\Api\DateTimeResult|null $LastStatusChange
 * @property string|null $OutsideIpAddress
 * @property 'UP'|'DOWN'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $CertificateArn
 */
class VgwTelemetry extends Shape
{
    /**
     * @param array{
     *     AcceptedRouteCount?: int|null,
     *     LastStatusChange?: \Aws\Api\DateTimeResult|null,
     *     OutsideIpAddress?: string|null,
     *     Status?: 'UP'|'DOWN'|null,
     *     StatusMessage?: string|null,
     *     CertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
