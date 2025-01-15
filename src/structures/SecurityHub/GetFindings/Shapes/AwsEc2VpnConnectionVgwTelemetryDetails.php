<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AcceptedRouteCount
 * @property string|null $CertificateArn
 * @property string|null $LastStatusChange
 * @property string|null $OutsideIpAddress
 * @property string|null $Status
 * @property string|null $StatusMessage
 */
class AwsEc2VpnConnectionVgwTelemetryDetails extends Shape
{
    /**
     * @param array{
     *     AcceptedRouteCount?: int|null,
     *     CertificateArn?: string|null,
     *     LastStatusChange?: string|null,
     *     OutsideIpAddress?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
