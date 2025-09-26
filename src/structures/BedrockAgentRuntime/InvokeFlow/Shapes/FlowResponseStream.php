<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowOutputEvent|null $flowOutputEvent
 * @property FlowCompletionEvent|null $flowCompletionEvent
 * @property FlowTraceEvent|null $flowTraceEvent
 * @property InternalServerException|null $internalServerException
 * @property ValidationException|null $validationException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property BadGatewayException|null $badGatewayException
 * @property FlowMultiTurnInputRequestEvent|null $flowMultiTurnInputRequestEvent
 */
class FlowResponseStream extends Shape
{
    /**
     * @param array{
     *     flowOutputEvent?: FlowOutputEvent|null,
     *     flowCompletionEvent?: FlowCompletionEvent|null,
     *     flowTraceEvent?: FlowTraceEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     validationException?: ValidationException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     flowMultiTurnInputRequestEvent?: FlowMultiTurnInputRequestEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
