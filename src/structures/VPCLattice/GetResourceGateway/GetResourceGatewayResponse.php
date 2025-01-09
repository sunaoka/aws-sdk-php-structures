<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property 'IPV4'|'IPV6'|'DUALSTACK' $ipAddressType
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $subnetIds
 * @property string $vpcId
 */
class GetResourceGatewayResponse extends Response
{
}
