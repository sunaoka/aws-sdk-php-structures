<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteResourceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 */
class DeleteResourceGatewayResponse extends Response
{
}
