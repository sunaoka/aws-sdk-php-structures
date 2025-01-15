<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'InProgress'|'Failed'|'Succeeded'|null $status
 * @property string|null $platformId
 * @property string|null $requestedBy
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $isRevoked
 * @property \Aws\Api\DateTimeResult|null $signatureExpiresBefore
 * @property \Aws\Api\DateTimeResult|null $signatureExpiresAfter
 * @property string|null $jobInvoker
 */
class ListSigningJobsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Failed'|'Succeeded'|null,
     *     platformId?: string|null,
     *     requestedBy?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     isRevoked?: bool|null,
     *     signatureExpiresBefore?: \Aws\Api\DateTimeResult|null,
     *     signatureExpiresAfter?: \Aws\Api\DateTimeResult|null,
     *     jobInvoker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
