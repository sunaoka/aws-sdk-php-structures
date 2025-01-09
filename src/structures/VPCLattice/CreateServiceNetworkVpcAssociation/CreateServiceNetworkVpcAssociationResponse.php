<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $createdBy
 * @property string $id
 * @property list<string> $securityGroupIds
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED' $status
 */
class CreateServiceNetworkVpcAssociationResponse extends Response
{
}
