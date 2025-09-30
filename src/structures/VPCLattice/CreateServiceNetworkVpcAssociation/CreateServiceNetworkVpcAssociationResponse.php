<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $arn
 * @property string|null $createdBy
 * @property list<string>|null $securityGroupIds
 */
class CreateServiceNetworkVpcAssociationResponse extends Response
{
}
