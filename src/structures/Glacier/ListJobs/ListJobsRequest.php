<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $limit
 * @property string $marker
 * @property string $statuscode
 * @property string $completed
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     limit?: string,
     *     marker?: string,
     *     statuscode?: string,
     *     completed?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
