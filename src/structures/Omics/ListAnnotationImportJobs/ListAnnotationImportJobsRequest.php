<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListAnnotationImportJobsFilter $filter
 */
class ListAnnotationImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     ids?: list<string>,
     *     nextToken?: string,
     *     filter?: Shapes\ListAnnotationImportJobsFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
