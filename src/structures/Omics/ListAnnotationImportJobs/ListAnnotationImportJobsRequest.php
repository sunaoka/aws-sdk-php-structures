<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property list<string>|null $ids
 * @property string|null $nextToken
 * @property Shapes\ListAnnotationImportJobsFilter|null $filter
 */
class ListAnnotationImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     ids?: list<string>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ListAnnotationImportJobsFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
