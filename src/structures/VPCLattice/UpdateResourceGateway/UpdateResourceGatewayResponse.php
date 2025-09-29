<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $id
 * @property string|null $arn
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 */
class UpdateResourceGatewayResponse extends Response
{
}
