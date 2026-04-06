<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBProxyEndpointName
 * @property string|null $DBProxyEndpointArn
 * @property string|null $DBProxyName
 * @property 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|null $Status
 * @property string|null $VpcId
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<string>|null $VpcSubnetIds
 * @property string|null $Endpoint
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property 'READ_WRITE'|'READ_ONLY'|null $TargetRole
 * @property bool|null $IsDefault
 * @property 'IPV4'|'IPV6'|'DUAL'|null $EndpointNetworkType
 */
class DBProxyEndpoint extends Shape
{
    /**
     * @param array{
     *     DBProxyEndpointName?: string|null,
     *     DBProxyEndpointArn?: string|null,
     *     DBProxyName?: string|null,
     *     Status?: 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|null,
     *     VpcId?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     VpcSubnetIds?: list<string>|null,
     *     Endpoint?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     TargetRole?: 'READ_WRITE'|'READ_ONLY'|null,
     *     IsDefault?: bool|null,
     *     EndpointNetworkType?: 'IPV4'|'IPV6'|'DUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
