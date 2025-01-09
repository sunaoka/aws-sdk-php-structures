<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string $StackName
 * @property string $NextToken
 * @property string $LogicalResourceId
 */
class DescribeChangeSetHooksRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string,
     *     NextToken?: string,
     *     LogicalResourceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
