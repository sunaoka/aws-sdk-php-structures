<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $RdsDbInstanceArn
 * @property string|null $RdsDbClusterArn
 * @property string|null $RdsDbProxyArn
 * @property string|null $RdsEndpoint
 * @property list<string>|null $SubnetIds
 */
class VerifiedAccessEndpointRdsOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|'tcp'|null,
     *     Port?: int<1, 65535>|null,
     *     RdsDbInstanceArn?: string|null,
     *     RdsDbClusterArn?: string|null,
     *     RdsDbProxyArn?: string|null,
     *     RdsEndpoint?: string|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
