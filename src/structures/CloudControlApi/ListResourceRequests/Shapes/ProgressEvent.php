<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResourceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $Identifier
 * @property string $RequestToken
 * @property string $HooksRequestToken
 * @property 'CREATE'|'DELETE'|'UPDATE' $Operation
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE' $OperationStatus
 * @property \Aws\Api\DateTimeResult $EventTime
 * @property string $ResourceModel
 * @property string $StatusMessage
 * @property 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'UnauthorizedTaggingOperation'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'ServiceTimeout'|'NetworkFailure'|'InternalFailure' $ErrorCode
 * @property \Aws\Api\DateTimeResult $RetryAfter
 */
class ProgressEvent extends Shape
{
    /**
     * @param array{
     *     TypeName?: string,
     *     Identifier?: string,
     *     RequestToken?: string,
     *     HooksRequestToken?: string,
     *     Operation?: 'CREATE'|'DELETE'|'UPDATE',
     *     OperationStatus?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE',
     *     EventTime?: \Aws\Api\DateTimeResult,
     *     ResourceModel?: string,
     *     StatusMessage?: string,
     *     ErrorCode?: 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'UnauthorizedTaggingOperation'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'ServiceTimeout'|'NetworkFailure'|'InternalFailure',
     *     RetryAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
