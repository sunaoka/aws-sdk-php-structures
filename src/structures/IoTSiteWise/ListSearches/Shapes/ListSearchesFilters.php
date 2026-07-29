<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'>|null $statusFilter
 * @property \Aws\Api\DateTimeResult|null $startedAfter
 * @property \Aws\Api\DateTimeResult|null $startedBefore
 * @property list<string>|null $groupIdFilter
 * @property list<'DEEP'|'QUICK'>|null $searchTypeFilter
 */
class ListSearchesFilters extends Shape
{
    /**
     * @param array{
     *     statusFilter?: list<'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED'>|null,
     *     startedAfter?: \Aws\Api\DateTimeResult|null,
     *     startedBefore?: \Aws\Api\DateTimeResult|null,
     *     groupIdFilter?: list<string>|null,
     *     searchTypeFilter?: list<'DEEP'|'QUICK'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
