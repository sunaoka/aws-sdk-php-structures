<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property 'HTTP1'|'HTTP2'|'GRPC'|null $protocolVersion
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property string|null $vpcIdentifier
 * @property HealthCheckConfig|null $healthCheck
 * @property 'V1'|'V2'|null $lambdaEventStructureVersion
 */
class TargetGroupConfig extends Shape
{
    /**
     * @param array{
     *     port?: int<1, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     protocolVersion?: 'HTTP1'|'HTTP2'|'GRPC'|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     vpcIdentifier?: string|null,
     *     healthCheck?: HealthCheckConfig|null,
     *     lambdaEventStructureVersion?: 'V1'|'V2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
