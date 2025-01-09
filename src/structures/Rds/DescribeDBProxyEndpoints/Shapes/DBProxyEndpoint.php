<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBProxyEndpointName
 * @property string $DBProxyEndpointArn
 * @property string $DBProxyName
 * @property 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting' $Status
 * @property string $VpcId
 * @property list<string> $VpcSecurityGroupIds
 * @property list<string> $VpcSubnetIds
 * @property string $Endpoint
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property 'READ_WRITE'|'READ_ONLY' $TargetRole
 * @property bool $IsDefault
 */
class DBProxyEndpoint extends Shape
{
    /**
     * @param array{
     *     DBProxyEndpointName?: string,
     *     DBProxyEndpointArn?: string,
     *     DBProxyName?: string,
     *     Status?: 'available'|'modifying'|'incompatible-network'|'insufficient-resource-limits'|'creating'|'deleting',
     *     VpcId?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     VpcSubnetIds?: list<string>,
     *     Endpoint?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     TargetRole?: 'READ_WRITE'|'READ_ONLY',
     *     IsDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
