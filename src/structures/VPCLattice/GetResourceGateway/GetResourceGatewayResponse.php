<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property list<string>|null $securityGroupIds
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class GetResourceGatewayResponse extends Response
{
}
