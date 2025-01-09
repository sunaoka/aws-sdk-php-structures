<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property list<string> $ids
 * @property string $nextToken
 * @property Shapes\ListVariantImportJobsFilter $filter
 */
class ListVariantImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
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
