<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $Names
 */
class DescribeCanariesLastRunRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Names?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
