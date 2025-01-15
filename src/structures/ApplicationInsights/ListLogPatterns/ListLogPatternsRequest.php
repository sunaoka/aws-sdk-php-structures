<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatterns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property string|null $PatternSetName
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListLogPatternsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
     *     PatternSetName?: string|null,
     *     MaxResults?: int<1, 40>|null,
     *     NextToken?: string|null,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
