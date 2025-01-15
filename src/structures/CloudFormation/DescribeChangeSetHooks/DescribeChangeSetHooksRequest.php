<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSetHooks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string|null $StackName
 * @property string|null $NextToken
 * @property string|null $LogicalResourceId
 */
class DescribeChangeSetHooksRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string|null,
     *     NextToken?: string|null,
     *     LogicalResourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
