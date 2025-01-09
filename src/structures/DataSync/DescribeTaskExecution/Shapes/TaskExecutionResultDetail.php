<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $PrepareDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $PrepareStatus
 * @property int<0, max> $TotalDuration
 * @property int<0, max> $TransferDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $TransferStatus
 * @property int<0, max> $VerifyDuration
 * @property 'PENDING'|'SUCCESS'|'ERROR' $VerifyStatus
 * @property string $ErrorCode
 * @property string $ErrorDetail
 */
class TaskExecutionResultDetail extends Shape
{
    /**
     * @param array{
     *     PrepareDuration?: int<0, max>,
     *     PrepareStatus?: 'PENDING'|'SUCCESS'|'ERROR',
     *     TotalDuration?: int<0, max>,
     *     TransferDuration?: int<0, max>,
     *     TransferStatus?: 'PENDING'|'SUCCESS'|'ERROR',
     *     VerifyDuration?: int<0, max>,
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
