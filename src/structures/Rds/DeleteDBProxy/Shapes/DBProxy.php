<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBProxyName
 * @property string $DBProxyArn
 * @property 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|'suspended'|'suspending'|'reactivating' $Status
 * @property string $EngineFamily
 * @property string $VpcId
 * @property list<string> $VpcSecurityGroupIds
 * @property list<string> $VpcSubnetIds
 * @property list<UserAuthConfigInfo> $Auth
 * @property string $RoleArn
 * @property string $Endpoint
 * @property bool $RequireTLS
 * @property int $IdleClientTimeout
 * @property bool $DebugLogging
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $UpdatedDate
 */
class DBProxy extends Shape
{
    /**
     * @param array{
     *     DBProxyName?: string,
     *     DBProxyArn?: string,
     *     Status?: 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting'|'suspended'|'suspending'|'reactivating',
     *     EngineFamily?: string,
     *     VpcId?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     VpcSubnetIds?: list<string>,
     *     Auth?: list<UserAuthConfigInfo>,
     *     RoleArn?: string,
     *     Endpoint?: string,
     *     RequireTLS?: bool,
     *     IdleClientTimeout?: int,
     *     DebugLogging?: bool,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     UpdatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
