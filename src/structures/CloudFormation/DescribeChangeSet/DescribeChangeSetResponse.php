<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChangeSetName
 * @property string|null $ChangeSetId
 * @property string|null $StackId
 * @property string|null $StackName
 * @property string|null $Description
 * @property list<Shapes\Parameter>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'UNAVAILABLE'|'AVAILABLE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'OBSOLETE'|null $ExecutionStatus
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'FAILED'|null $Status
 * @property string|null $StatusReason
 * @property list<string>|null $NotificationARNs
 * @property Shapes\RollbackConfiguration|null $RollbackConfiguration
 * @property list<'CAPABILITY_IAM'|'CAPABILITY_NAMED_IAM'|'CAPABILITY_AUTO_EXPAND'>|null $Capabilities
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\Change>|null $Changes
 * @property string|null $NextToken
 * @property bool|null $IncludeNestedStacks
 * @property string|null $ParentChangeSetId
 * @property string|null $RootChangeSetId
 * @property 'DO_NOTHING'|'ROLLBACK'|'DELETE'|null $OnStackFailure
 * @property bool|null $ImportExistingResources
 */
class DescribeChangeSetResponse extends Response
{
}
