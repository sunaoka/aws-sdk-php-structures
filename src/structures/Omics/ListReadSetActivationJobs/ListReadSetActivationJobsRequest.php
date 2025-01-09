<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetActivationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ActivateReadSetFilter $filter
 */
class ListReadSetActivationJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ActivateReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
