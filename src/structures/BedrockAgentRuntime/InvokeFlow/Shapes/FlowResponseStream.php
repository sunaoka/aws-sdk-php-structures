<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property FlowCompletionEvent|null $flowCompletionEvent
 * @property FlowMultiTurnInputRequestEvent|null $flowMultiTurnInputRequestEvent
 * @property FlowOutputEvent|null $flowOutputEvent
 * @property FlowTraceEvent|null $flowTraceEvent
 * @property InternalServerException|null $internalServerException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 */
class FlowResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     flowCompletionEvent?: FlowCompletionEvent|null,
     *     flowMultiTurnInputRequestEvent?: FlowMultiTurnInputRequestEvent|null,
     *     flowOutputEvent?: FlowOutputEvent|null,
     *     flowTraceEvent?: FlowTraceEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     validationException?: ValidationException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
