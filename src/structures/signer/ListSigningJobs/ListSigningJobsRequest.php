<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'InProgress'|'Failed'|'Succeeded' $status
 * @property string $platformId
 * @property string $requestedBy
 * @property int $maxResults
 * @property string $nextToken
 * @property bool $isRevoked
 * @property \Aws\Api\DateTimeResult $signatureExpiresBefore
 * @property \Aws\Api\DateTimeResult $signatureExpiresAfter
 * @property string $jobInvoker
 */
class ListSigningJobsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Failed'|'Succeeded',
     *     platformId?: string,
     *     requestedBy?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     isRevoked?: bool,
     *     signatureExpiresBefore?: \Aws\Api\DateTimeResult,
     *     signatureExpiresAfter?: \Aws\Api\DateTimeResult,
     *     jobInvoker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
