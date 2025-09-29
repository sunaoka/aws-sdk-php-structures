<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InlineAgentPayloadPart|null $chunk
 * @property InlineAgentTracePart|null $trace
 * @property InlineAgentReturnControlPayload|null $returnControl
 * @property InternalServerException|null $internalServerException
 * @property ValidationException|null $validationException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property BadGatewayException|null $badGatewayException
 * @property InlineAgentFilePart|null $files
 */
class InlineAgentResponseStream extends Shape
{
    /**
     * @param array{
     *     chunk?: InlineAgentPayloadPart|null,
     *     trace?: InlineAgentTracePart|null,
     *     returnControl?: InlineAgentReturnControlPayload|null,
     *     internalServerException?: InternalServerException|null,
     *     validationException?: ValidationException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     files?: InlineAgentFilePart|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
