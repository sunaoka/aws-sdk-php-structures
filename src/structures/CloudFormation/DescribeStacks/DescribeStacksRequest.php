<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StackName
 * @property string|null $NextToken
 */
class DescribeStacksRequest extends Request
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
