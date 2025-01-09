<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChangeSetName
 * @property string $ChangeSetId
 * @property string $StackId
 * @property string $StackName
 * @property string $Description
 * @property list<Shapes\Parameter> $Parameters
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE' $ExecutionStatus
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED' $Status
 * @property string $StatusReason
 * @property list<string> $NotificationARNs
 * @property Shapes\RollbackConfiguration $RollbackConfiguration
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'> $Capabilities
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\Change> $Changes
 * @property string $NextToken
 * @property bool $IncludeNestedStacks
 * @property string $ParentChangeSetId
 * @property string $RootChangeSetId
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE' $OnStackFailure
 * @property bool $ImportExistingResources
 */
class DescribeChangeSetResponse extends Response
{
}
