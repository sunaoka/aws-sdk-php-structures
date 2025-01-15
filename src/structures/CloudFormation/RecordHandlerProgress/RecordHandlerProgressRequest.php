<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RecordHandlerProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BearerToken
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED' $OperationStatus
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $CurrentOperationStatus
 * @property string|null $StatusMessage
 * @property 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'NetworkFailure'|'InternalFailure'|'InvalidTypeConfiguration'|'HandlerInternalFailure'|'NonCompliant'|'Unknown'|'UnsupportedTarget'|null $ErrorCode
 * @property string|null $ResourceModel
 * @property string|null $ClientRequestToken
 */
class RecordHandlerProgressRequest extends Request
{
    /**
     * @param array{
     *     BearerToken: string,
     *     OperationStatus: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     CurrentOperationStatus?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     ErrorCode?: 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'NetworkFailure'|'InternalFailure'|'InvalidTypeConfiguration'|'HandlerInternalFailure'|'NonCompliant'|'Unknown'|'UnsupportedTarget'|null,
     *     ResourceModel?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
