<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property 'IPV4'|'IPV6'|null $ipAddressType
 * @property string|null $name
 * @property list<string>|null $securityGroupIds
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $status
 * @property list<string>|null $subnetIds
 * @property string|null $vpcId
 */
class UpdateResourceGatewayResponse extends Response
{
}
