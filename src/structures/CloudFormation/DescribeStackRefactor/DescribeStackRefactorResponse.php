<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackRefactor;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $StackRefactorId
 * @property list<string>|null $StackIds
 * @property 'UNAVAILABLE'|'AVAILABLE'|'OBSOLETE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'|null $ExecutionStatus
 * @property string|null $ExecutionStatusReason
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|null $Status
 * @property string|null $StatusReason
 */
class DescribeStackRefactorResponse extends Response
{
}
