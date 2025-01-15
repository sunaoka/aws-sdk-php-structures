<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property Shapes\TargetGroupConfig|null $config
 * @property string|null $id
 * @property string|null $name
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 */
class CreateTargetGroupResponse extends Response
{
}
