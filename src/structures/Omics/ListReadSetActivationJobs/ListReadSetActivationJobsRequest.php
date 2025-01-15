<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetActivationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ActivateReadSetFilter|null $filter
 */
class ListReadSetActivationJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ActivateReadSetFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
