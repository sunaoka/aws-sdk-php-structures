<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListVariantImportJobsFilter $filter
 */
class ListVariantImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     ids?: list<string>,
     *     nextToken?: string,
     *     filter?: Shapes\ListVariantImportJobsFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
