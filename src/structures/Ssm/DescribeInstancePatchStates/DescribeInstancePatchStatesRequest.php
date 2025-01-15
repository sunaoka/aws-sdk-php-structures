<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string|null $NextToken
 * @property int<10, 100>|null $MaxResults
 */
class DescribeInstancePatchStatesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     NextToken?: string|null,
     *     MaxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
