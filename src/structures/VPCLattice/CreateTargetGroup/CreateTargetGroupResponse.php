<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 * @property Shapes\TargetGroupConfig|null $config
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 */
class CreateTargetGroupResponse extends Response
{
}
