<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBProxyName
 * @property string|null $DBProxyArn
 * @property 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|'suspended'|'suspending'|'reactivating'|null $Status
 * @property string|null $EngineFamily
 * @property string|null $VpcId
 * @property list<string>|null $VpcSecurityGroupIds
 * @property list<string>|null $VpcSubnetIds
 * @property string|null $DefaultAuthScheme
 * @property list<UserAuthConfigInfo>|null $Auth
 * @property string|null $RoleArn
 * @property string|null $Endpoint
 * @property bool|null $RequireTLS
 * @property int|null $IdleClientTimeout
 * @property bool|null $DebugLogging
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $UpdatedDate
 * @property 'IPV4'|'IPV6'|'DUAL'|null $EndpointNetworkType
 * @property 'IPV4'|'IPV6'|null $TargetConnectionNetworkType
 */
class DBProxy extends Shape
{
    /**
     * @param array{
     *     DBProxyName?: string|null,
     *     DBProxyArn?: string|null,
     *     Status?: 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|'suspended'|'suspending'|'reactivating'|null,
     *     EngineFamily?: string|null,
     *     VpcId?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     VpcSubnetIds?: list<string>|null,
     *     DefaultAuthScheme?: string|null,
     *     Auth?: list<UserAuthConfigInfo>|null,
     *     RoleArn?: string|null,
     *     Endpoint?: string|null,
     *     RequireTLS?: bool|null,
     *     IdleClientTimeout?: int|null,
     *     DebugLogging?: bool|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     UpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     EndpointNetworkType?: 'IPV4'|'IPV6'|'DUAL'|null,
     *     TargetConnectionNetworkType?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
