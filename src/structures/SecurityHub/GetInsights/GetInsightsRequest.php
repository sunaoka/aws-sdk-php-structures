<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $InsightArns
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetInsightsRequest extends Request
{
    /**
     * @param array{
     *     InsightArns?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
