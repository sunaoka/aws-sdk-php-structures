<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $name
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 * @property Shapes\TargetGroupConfig|null $config
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property list<string>|null $serviceArns
 * @property string|null $failureMessage
 * @property string|null $failureCode
 */
class GetTargetGroupResponse extends Response
{
}
