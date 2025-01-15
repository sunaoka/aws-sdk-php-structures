<?php

namespace Sunaoka\Aws\Structures\ApplicationInsights\ListLogPatternSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceGroupName
 * @property int<1, 40>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 */
class ListLogPatternSetsRequest extends Request
{
    /**
     * @param array{
     *     ResourceGroupName: string,
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
