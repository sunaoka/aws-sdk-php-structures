<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $NextToken
 */
class DescribeStackEventsRequest extends Request
{
    /**
     * @param array{
     *     StackName?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
