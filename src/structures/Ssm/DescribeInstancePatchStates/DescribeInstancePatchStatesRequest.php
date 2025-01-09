<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string $NextToken
 * @property int<10, 100> $MaxResults
 */
class DescribeInstancePatchStatesRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<10, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
