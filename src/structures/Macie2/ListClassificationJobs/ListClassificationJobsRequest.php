<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListJobsFilterCriteria|null $filterCriteria
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ListJobsSortCriteria|null $sortCriteria
 */
class ListClassificationJobsRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\ListJobsFilterCriteria|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sortCriteria?: Shapes\ListJobsSortCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
