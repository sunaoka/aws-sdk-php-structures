<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL'|null $TargetType
 * @property string|null $TargetId
 * @property list<Shapes\HookResultSummary>|null $HookResults
 * @property string|null $NextToken
 */
class ListHookResultsResponse extends Response
{
}
