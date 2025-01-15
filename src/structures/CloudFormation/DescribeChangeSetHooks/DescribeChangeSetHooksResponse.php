<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChangeSetId
 * @property string|null $ChangeSetName
 * @property list<Shapes\ChangeSetHook>|null $Hooks
 * @property 'PLANNING'|'PLANNED'|'UNAVAILABLE'|null $Status
 * @property string|null $NextToken
 * @property string|null $StackId
 * @property string|null $StackName
 */
class DescribeChangeSetHooksResponse extends Response
{
}
