<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property Shapes\TargetGroupConfig|null $config
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $failureCode
 * @property string|null $failureMessage
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property list<string>|null $serviceArns
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|null $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB'|null $type
 */
class GetTargetGroupResponse extends Response
{
}
