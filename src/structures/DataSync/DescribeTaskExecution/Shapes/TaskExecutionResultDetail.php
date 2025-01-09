<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PrepareDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $PrepareStatus
 * @property int $TotalDuration
 * @property int $TransferDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $TransferStatus
 * @property int $VerifyDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $VerifyStatus
 * @property string $ErrorCode
 * @property string $ErrorDetail
 */
class TaskExecutionResultDetail extends Shape
{
    /**
     * @param array{
     *     PrepareDuration?: int,
     *     PrepareStatus?: 'PENDING'|'SUCCESS'|'ERROR',
     *     TotalDuration?: int,
     *     TransferDuration?: int,
     *     TransferStatus?: 'PENDING'|'SUCCESS'|'ERROR',
     *     VerifyDuration?: int,
     *     VerifyStatus?: 'PENDING'|'SUCCESS'|'ERROR',
     *     ErrorCode?: string,
     *     ErrorDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
