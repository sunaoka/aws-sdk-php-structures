<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 */
class DeleteTargetGroupResponse extends Response
{
}
