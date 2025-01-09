<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\TargetGroupConfig $config
 * @property string $id
 * @property string $name
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 */
class UpdateTargetGroupResponse extends Response
{
}
