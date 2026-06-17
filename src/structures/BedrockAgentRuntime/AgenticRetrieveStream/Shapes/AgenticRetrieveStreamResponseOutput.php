<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property InternalServerException|null $internalServerException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property AgenticRetrieveResponseEvent|null $responseEvent
 * @property AgenticRetrieveResultEvent|null $result
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property AgenticRetrieveTraceEvent|null $traceEvent
 * @property ValidationException|null $validationException
 */
class AgenticRetrieveStreamResponseOutput extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     internalServerException?: InternalServerException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     responseEvent?: AgenticRetrieveResponseEvent|null,
     *     result?: AgenticRetrieveResultEvent|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     traceEvent?: AgenticRetrieveTraceEvent|null,
     *     validationException?: ValidationException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
