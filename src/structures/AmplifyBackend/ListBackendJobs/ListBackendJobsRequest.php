<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListBackendJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string|null $JobId
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Operation
 * @property string|null $Status
 */
class ListBackendJobsRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     JobId?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null,
     *     Operation?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
