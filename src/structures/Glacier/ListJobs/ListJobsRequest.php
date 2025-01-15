<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string|null $limit
 * @property string|null $marker
 * @property string|null $statuscode
 * @property string|null $completed
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     limit?: string|null,
     *     marker?: string|null,
     *     statuscode?: string|null,
     *     completed?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
