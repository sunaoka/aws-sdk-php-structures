<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int<1, 65535> $Port
 * @property string $RdsDbInstanceArn
 * @property string $RdsDbClusterArn
 * @property string $RdsDbProxyArn
 * @property string $RdsEndpoint
 * @property list<string> $SubnetIds
 */
class VerifiedAccessEndpointRdsOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp',
     *     Port?: int<1, 65535>,
     *     RdsDbInstanceArn?: string,
     *     RdsDbClusterArn?: string,
     *     RdsDbProxyArn?: string,
     *     RdsEndpoint?: string,
     *     SubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
