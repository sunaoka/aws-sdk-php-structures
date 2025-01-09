<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobsByProtectedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED' $ByStatus
 * @property \Aws\Api\DateTimeResult $ByRecoveryPointCreationDateAfter
 * @property \Aws\Api\DateTimeResult $ByRecoveryPointCreationDateBefore
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListRestoreJobsByProtectedResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ByStatus?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED',
     *     ByRecoveryPointCreationDateAfter?: \Aws\Api\DateTimeResult,
     *     ByRecoveryPointCreationDateBefore?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
