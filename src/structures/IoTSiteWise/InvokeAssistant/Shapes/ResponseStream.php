<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Trace|null $trace
 * @property InvocationOutput|null $output
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictingOperationException|null $conflictingOperationException
 * @property InternalFailureException|null $internalFailureException
 * @property InvalidRequestException|null $invalidRequestException
 * @property LimitExceededException|null $limitExceededException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ThrottlingException|null $throttlingException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     trace?: Trace|null,
     *     output?: InvocationOutput|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictingOperationException?: ConflictingOperationException|null,
     *     internalFailureException?: InternalFailureException|null,
     *     invalidRequestException?: InvalidRequestException|null,
     *     limitExceededException?: LimitExceededException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     throttlingException?: ThrottlingException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
