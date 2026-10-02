<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'SUCCESS'|'PROCESSING'|'FAILED'|null $status
 * @property string|null $brandProfileId
 * @property string|null $operationType
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'SUCCESS'|'PROCESSING'|'FAILED'|null,
     *     brandProfileId?: string|null,
     *     operationType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
