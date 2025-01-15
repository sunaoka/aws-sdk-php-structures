<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreJobsByProtectedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null $ByStatus
 * @property \Aws\Api\DateTimeResult|null $ByRecoveryPointCreationDateAfter
 * @property \Aws\Api\DateTimeResult|null $ByRecoveryPointCreationDateBefore
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListRestoreJobsByProtectedResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ByStatus?: 'PENDING'|'RUNNING'|'COMPLETED'|'ABORTED'|'FAILED'|null,
     *     ByRecoveryPointCreationDateAfter?: \Aws\Api\DateTimeResult|null,
     *     ByRecoveryPointCreationDateBefore?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
