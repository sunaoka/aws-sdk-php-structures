<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeActionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ActionTargetArns
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeActionTargetsRequest extends Request
{
    /**
     * @param array{
     *     ActionTargetArns?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
