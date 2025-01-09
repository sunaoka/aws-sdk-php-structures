<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListJobsFilterCriteria $filterCriteria
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ListJobsSortCriteria $sortCriteria
 */
class ListClassificationJobsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListJobsFilterCriteria,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortCriteria?: Shapes\ListJobsSortCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
