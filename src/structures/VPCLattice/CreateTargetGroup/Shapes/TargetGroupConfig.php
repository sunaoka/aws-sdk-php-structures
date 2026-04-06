<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HealthCheckConfig|null $healthCheck
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property 'HTTP1'|'HTTP2'|'GRPC'|null $protocolVersion
 * @property string $vpcIdentifier
 */
class TargetGroupConfig extends Shape
{
    /**
     * @param array{
     *     healthCheck?: HealthCheckConfig|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|null,
     *     port: int<1, 65535>,
     *     protocol: 'HTTP'|'HTTPS',
     *     protocolVersion?: 'HTTP1'|'HTTP2'|'GRPC'|null,
     *     vpcIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
