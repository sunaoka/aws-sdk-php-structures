<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetActivationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ActivateReadSetFilter $filter
 */
class ListReadSetActivationJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ActivateReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
