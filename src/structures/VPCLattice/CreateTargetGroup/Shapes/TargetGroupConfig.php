<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthCheckConfig $healthCheck
 * @property 'IPV4'|'IPV6' $ipAddressType
 * @property 'V1'|'V2' $lambdaEventStructureVersion
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS'|'TCP' $protocol
 * @property 'HTTP1'|'HTTP2'|'GRPC' $protocolVersion
 * @property string $vpcIdentifier
 */
class TargetGroupConfig extends Shape
{
    /**
     * @param array{
     *     healthCheck?: HealthCheckConfig,
     *     ipAddressType?: 'IPV4'|'IPV6',
     *     lambdaEventStructureVersion?: 'V1'|'V2',
     *     port?: int<1, 65535>,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP',
     *     protocolVersion?: 'HTTP1'|'HTTP2'|'GRPC',
     *     vpcIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
