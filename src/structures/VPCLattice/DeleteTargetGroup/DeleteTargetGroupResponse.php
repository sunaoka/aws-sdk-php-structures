<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class DeleteTargetGroupResponse extends Response
{
}
