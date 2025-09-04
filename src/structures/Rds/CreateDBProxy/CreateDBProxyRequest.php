<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property 'MYSQL'|'POSTGRESQL'|'SQLSERVER' $EngineFamily
 * @property list<Shapes\UserAuthConfig> $Auth
 * @property string $RoleArn
 * @property list<string> $VpcSubnetIds
 * @property list<string>|null $VpcSecurityGroupIds
 * @property bool|null $RequireTLS
 * @property int|null $IdleClientTimeout
 * @property bool|null $DebugLogging
 * @property list<Shapes\Tag>|null $Tags
 * @property 'IPV4'|'IPV6'|'DUAL'|null $EndpointNetworkType
 * @property 'IPV4'|'IPV6'|null $TargetConnectionNetworkType
 */
class CreateDBProxyRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     EngineFamily: 'MYSQL'|'POSTGRESQL'|'SQLSERVER',
     *     Auth: list<Shapes\UserAuthConfig>,
     *     RoleArn: string,
     *     VpcSubnetIds: list<string>,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     RequireTLS?: bool|null,
     *     IdleClientTimeout?: int|null,
     *     DebugLogging?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EndpointNetworkType?: 'IPV4'|'IPV6'|'DUAL'|null,
     *     TargetConnectionNetworkType?: 'IPV4'|'IPV6'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
