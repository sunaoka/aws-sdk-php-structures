<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string $StackName
 * @property string $NextToken
 * @property bool $IncludePropertyValues
 */
class DescribeChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string,
     *     NextToken?: string,
     *     IncludePropertyValues?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
