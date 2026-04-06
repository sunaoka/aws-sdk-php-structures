<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListHookResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL' $TargetType
 * @property string $TargetId
 * @property string|null $NextToken
 */
class ListHookResultsRequest extends Request
{
    /**
     * @param array{
     *     TargetType: 'CHANGE_SET'|'STACK'|'RESOURCE'|'CLOUD_CONTROL',
     *     TargetId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
