<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListBackendJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppId
 * @property string $BackendEnvironmentName
 * @property string $JobId
 * @property int<1, 25> $MaxResults
 * @property string $NextToken
 * @property string $Operation
 * @property string $Status
 */
class ListBackendJobsRequest extends Request
{
    /**
     * @param array{
     *     AppId: string,
     *     BackendEnvironmentName: string,
     *     JobId?: string,
     *     MaxResults?: int<1, 25>,
     *     NextToken?: string,
     *     Operation?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
