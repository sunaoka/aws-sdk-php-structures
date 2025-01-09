<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property Shapes\TargetGroupConfig $config
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $failureCode
 * @property string $failureMessage
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property list<string> $serviceArns
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property 'IP'|'LAMBDA'|'INSTANCE'|'ALB' $type
 */
class GetTargetGroupResponse extends Response
{
}
