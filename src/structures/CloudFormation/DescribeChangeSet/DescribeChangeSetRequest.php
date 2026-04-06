<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string|null $StackName
 * @property string|null $NextToken
 * @property bool|null $IncludePropertyValues
 */
class DescribeChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string|null,
     *     NextToken?: string|null,
     *     IncludePropertyValues?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
