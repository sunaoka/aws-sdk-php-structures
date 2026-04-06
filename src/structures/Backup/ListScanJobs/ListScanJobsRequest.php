<?php

namespace Sunaoka\Aws\Structures\Backup\ListScanJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ByAccountId
 * @property string|null $ByBackupVaultName
 * @property \Aws\Api\DateTimeResult|null $ByCompleteAfter
 * @property \Aws\Api\DateTimeResult|null $ByCompleteBefore
 * @property 'GUARDDUTY'|null $ByMalwareScanner
 * @property string|null $ByRecoveryPointArn
 * @property string|null $ByResourceArn
 * @property 'EBS'|'EC2'|'S3'|null $ByResourceType
 * @property 'NO_THREATS_FOUND'|'THREATS_FOUND'|null $ByScanResultStatus
 * @property 'CANCELED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'CREATED'|'FAILED'|'RUNNING'|null $ByState
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListScanJobsRequest extends Request
{
    /**
     * @param array{
     *     ByAccountId?: string|null,
     *     ByBackupVaultName?: string|null,
     *     ByCompleteAfter?: \Aws\Api\DateTimeResult|null,
     *     ByCompleteBefore?: \Aws\Api\DateTimeResult|null,
     *     ByMalwareScanner?: 'GUARDDUTY'|null,
     *     ByRecoveryPointArn?: string|null,
     *     ByResourceArn?: string|null,
     *     ByResourceType?: 'EBS'|'EC2'|'S3'|null,
     *     ByScanResultStatus?: 'NO_THREATS_FOUND'|'THREATS_FOUND'|null,
     *     ByState?: 'CANCELED'|'COMPLETED'|'COMPLETED_WITH_ISSUES'|'CREATED'|'FAILED'|'RUNNING'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
