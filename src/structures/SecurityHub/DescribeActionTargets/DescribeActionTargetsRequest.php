<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeActionTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ActionTargetArns
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeActionTargetsRequest extends Request
{
    /**
     * @param array{
     *     ActionTargetArns?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
