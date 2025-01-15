<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeInsightRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class DescribeInsightRulesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
