<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FindingsTrendsFilters|null $Filters
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetFindingsTrendsV2Request extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\FindingsTrendsFilters|null,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
