<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Trace $trace
 * @property InvocationOutput $output
 * @property AccessDeniedException $accessDeniedException
 * @property ConflictingOperationException $conflictingOperationException
 * @property InternalFailureException $internalFailureException
 * @property InvalidRequestException $invalidRequestException
 * @property LimitExceededException $limitExceededException
 * @property ResourceNotFoundException $resourceNotFoundException
 * @property ThrottlingException $throttlingException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     trace?: Trace,
     *     output?: InvocationOutput,
     *     accessDeniedException?: AccessDeniedException,
     *     conflictingOperationException?: ConflictingOperationException,
     *     internalFailureException?: InternalFailureException,
     *     invalidRequestException?: InvalidRequestException,
     *     limitExceededException?: LimitExceededException,
     *     resourceNotFoundException?: ResourceNotFoundException,
     *     throttlingException?: ThrottlingException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
