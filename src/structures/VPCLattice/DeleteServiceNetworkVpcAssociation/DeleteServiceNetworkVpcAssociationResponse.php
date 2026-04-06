<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteServiceNetworkVpcAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $arn
 */
class DeleteServiceNetworkVpcAssociationResponse extends Response
{
}
