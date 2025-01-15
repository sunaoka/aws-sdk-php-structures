<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $referenceStoreId
 * @property Shapes\ImportReferenceFilter|null $filter
 */
class ListReferenceImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     referenceStoreId: string,
     *     filter?: Shapes\ImportReferenceFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
