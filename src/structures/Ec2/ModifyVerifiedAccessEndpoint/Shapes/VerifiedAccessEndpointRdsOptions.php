<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|'tcp' $Protocol
 * @property int $Port
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
     *     Port?: int,
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
