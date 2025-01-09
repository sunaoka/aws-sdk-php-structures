<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property 'MYSQL'|'POSTGRESQL'|'SQLSERVER' $EngineFamily
 * @property list<Shapes\UserAuthConfig> $Auth
 * @property string $RoleArn
 * @property list<string> $VpcSubnetIds
 * @property list<string> $VpcSecurityGroupIds
 * @property bool $RequireTLS
 * @property int $IdleClientTimeout
 * @property bool $DebugLogging
 * @property list<Shapes\Tag> $Tags
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
     *     VpcSecurityGroupIds?: list<string>,
     *     RequireTLS?: bool,
     *     IdleClientTimeout?: int,
     *     DebugLogging?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
