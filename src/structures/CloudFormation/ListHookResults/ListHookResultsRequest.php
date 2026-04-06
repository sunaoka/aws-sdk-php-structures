<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL'|null $TargetType
 * @property string|null $TargetId
 * @property string|null $TypeArn
 * @property 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null $Status
 * @property string|null $NextToken
 */
class ListHookResultsRequest extends Request
{
    /**
     * @param array{
     *     TargetType?: 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL'|null,
     *     TargetId?: string|null,
     *     TypeArn?: string|null,
     *     Status?: 'HOOK_IN_PROGRESS'|'HOOK_COMPLETE_SUCCEEDED'|'HOOK_COMPLETE_FAILED'|'HOOK_FAILED'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
