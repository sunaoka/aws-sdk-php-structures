<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RecordHandlerProgress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BearerToken
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED' $OperationStatus
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED' $CurrentOperationStatus
 * @property string $StatusMessage
 * @property 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'NetworkFailure'|'InternalFailure'|'InvalidTypeConfiguration'|'HandlerInternalFailure'|'NonCompliant'|'Unknown'|'UnsupportedTarget' $ErrorCode
 * @property string $ResourceModel
 * @property string $ClientRequestToken
 */
class RecordHandlerProgressRequest extends Request
{
    /**
     * @param array{
     *     BearerToken: string,
     *     OperationStatus: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     CurrentOperationStatus?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED',
     *     StatusMessage?: string,
     *     ErrorCode?: 'NotUpdatable'|'InvalidRequest'|'AccessDenied'|'InvalidCredentials'|'AlreadyExists'|'NotFound'|'ResourceConflict'|'Throttling'|'ServiceLimitExceeded'|'NotStabilized'|'GeneralServiceException'|'ServiceInternalError'|'NetworkFailure'|'InternalFailure'|'InvalidTypeConfiguration'|'HandlerInternalFailure'|'NonCompliant'|'Unknown'|'UnsupportedTarget',
     *     ResourceModel?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
