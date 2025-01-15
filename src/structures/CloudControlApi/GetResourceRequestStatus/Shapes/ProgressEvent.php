<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResourceRequestStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeName
 * @property string|null $Identifier
 * @property string|null $RequestToken
 * @property string|null $HooksRequestToken
 * @property 'CREATE'|'DELETE'|'UPDATE'|null $Operation
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE'|null $OperationStatus
 * @property \Aws\Api\DateTimeResult|null $EventTime
 * @property string|null $ResourceModel
 * @property string|null $StatusMessage
 * @property 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'UnauthorizedTaggingOperation'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'ServiceTimeout'|'NetworkFailure'|'InternalFailure'|null $ErrorCode
 * @property \Aws\Api\DateTimeResult|null $RetryAfter
 */
class ProgressEvent extends Shape
{
    /**
     * @param array{
     *     TypeName?: string|null,
     *     Identifier?: string|null,
     *     RequestToken?: string|null,
     *     HooksRequestToken?: string|null,
     *     Operation?: 'CREATE'|'DELETE'|'UPDATE'|null,
     *     OperationStatus?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETE'|null,
     *     EventTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceModel?: string|null,
     *     StatusMessage?: string|null,
     *     ErrorCode?: 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'UnauthorizedTaggingOperation'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'ServiceTimeout'|'NetworkFailure'|'InternalFailure'|null,
     *     RetryAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
