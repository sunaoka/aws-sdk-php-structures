<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL' $TargetType
 * @property string $TargetId
 * @property list<Shapes\HookResultSummary> $HookResults
 * @property string $NextToken
 */
class ListHookResultsResponse extends Response
{
}
