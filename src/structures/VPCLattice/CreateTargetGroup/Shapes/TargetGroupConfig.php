<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthCheckConfig|null $healthCheck
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property 'V1'|'V2'|null $lambdaEventStructureVersion
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TCP'|null $protocol
 * @property 'HTTP1'|'HTTP2'|'GRPC'|null $protocolVersion
 * @property string|null $vpcIdentifier
 */
class TargetGroupConfig extends Shape
{
    /**
     * @param array{
     *     healthCheck?: HealthCheckConfig|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     lambdaEventStructureVersion?: 'V1'|'V2'|null,
     *     port?: int<1, 65535>|null,
     *     protocol?: 'HTTP'|'HTTPS'|'TCP'|null,
     *     protocolVersion?: 'HTTP1'|'HTTP2'|'GRPC'|null,
     *     vpcIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
