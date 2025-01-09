<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string $PatternSetName
 * @property int<1, 40> $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 */
class ListLogPatternsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName?: string,
     *     MaxResults?: int<1, 40>,
     *     NextToken?: string,
     *     AccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
