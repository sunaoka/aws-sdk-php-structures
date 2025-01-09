<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChangeSetId
 * @property string $ChangeSetName
 * @property list<Shapes\ChangeSetHook> $Hooks
 * @property 'PLANNING'|'PLANNED'|'UNAVAILABLE' $Status
 * @property string $NextToken
 * @property string $StackId
 * @property string $StackName
 */
class DescribeChangeSetHooksResponse extends Response
{
}
