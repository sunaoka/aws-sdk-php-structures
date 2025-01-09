<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InsightArns
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetInsightsRequest extends Request
{
    /**
     * @param array{
     *     InsightArns?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
