<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AcceptedRouteCount
 * @property string $CertificateArn
 * @property string $LastStatusChange
 * @property string $OutsideIpAddress
 * @property string $Status
 * @property string $StatusMessage
 */
class AwsEc2VpnConnectionVgwTelemetryDetails extends Shape
{
    /**
     * @param array{
     *     AcceptedRouteCount?: int,
     *     CertificateArn?: string,
     *     LastStatusChange?: string,
     *     OutsideIpAddress?: string,
     *     Status?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
