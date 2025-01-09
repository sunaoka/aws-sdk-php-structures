<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListAnnotationImportJobsFilter $filter
 */
class ListAnnotationImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
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
