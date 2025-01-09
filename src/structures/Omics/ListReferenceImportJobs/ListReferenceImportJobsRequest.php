<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $referenceStoreId
 * @property Shapes\ImportReferenceFilter $filter
 */
class ListReferenceImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     referenceStoreId: string,
     *     filter?: Shapes\ImportReferenceFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
