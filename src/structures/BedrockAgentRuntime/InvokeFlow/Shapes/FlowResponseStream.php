<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException $accessDeniedException
 * @property BadGatewayException $badGatewayException
 * @property ConflictException $conflictException
 * @property DependencyFailedException $dependencyFailedException
 * @property FlowCompletionEvent $flowCompletionEvent
 * @property FlowOutputEvent $flowOutputEvent
 * @property FlowTraceEvent $flowTraceEvent
 * @property InternalServerException $internalServerException
 * @property ResourceNotFoundException $resourceNotFoundException
 * @property ServiceQuotaExceededException $serviceQuotaExceededException
 * @property ThrottlingException $throttlingException
 * @property ValidationException $validationException
 */
class FlowResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException,
     *     badGatewayException?: BadGatewayException,
     *     conflictException?: ConflictException,
     *     dependencyFailedException?: DependencyFailedException,
     *     flowCompletionEvent?: FlowCompletionEvent,
     *     flowOutputEvent?: FlowOutputEvent,
     *     flowTraceEvent?: FlowTraceEvent,
     *     internalServerException?: InternalServerException,
     *     resourceNotFoundException?: ResourceNotFoundException,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException,
     *     throttlingException?: ThrottlingException,
     *     validationException?: ValidationException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
