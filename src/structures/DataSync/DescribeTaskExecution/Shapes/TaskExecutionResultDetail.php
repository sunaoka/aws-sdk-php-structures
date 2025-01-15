<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $PrepareDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR'|null $PrepareStatus
 * @property int<0, max>|null $TotalDuration
 * @property int<0, max>|null $TransferDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR'|null $TransferStatus
 * @property int<0, max>|null $VerifyDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR'|null $VerifyStatus
 * @property string|null $ErrorCode
 * @property string|null $ErrorDetail
 */
class TaskExecutionResultDetail extends Shape
{
    /**
     * @param array{
     *     PrepareDuration?: int<0, max>|null,
     *     PrepareStatus?: 'PENDING'|'SUCCESS'|'ERROR'|null,
     *     TotalDuration?: int<0, max>|null,
     *     TransferDuration?: int<0, max>|null,
     *     TransferStatus?: 'PENDING'|'SUCCESS'|'ERROR'|null,
     *     VerifyDuration?: int<0, max>|null,
     *     VerifyStatus?: 'PENDING'|'SUCCESS'|'ERROR'|null,
     *     ErrorCode?: string|null,
     *     ErrorDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
