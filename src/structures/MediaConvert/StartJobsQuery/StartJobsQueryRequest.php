<?php

namespace Sunaoka\Aws\Structures\MediaConvert\StartJobsQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\JobsQueryFilter>|null $FilterList
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 */
class StartJobsQueryRequest extends Request
{
    /**
     * @param array{
     *     FilterList?: list<Shapes\JobsQueryFilter>|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
