<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 * @property InlineAgentPayloadPart|null $chunk
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property InlineAgentFilePart|null $files
 * @property InternalServerException|null $internalServerException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property InlineAgentReturnControlPayload|null $returnControl
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property InlineAgentTracePart|null $trace
 * @property ValidationException|null $validationException
 */
class InlineAgentResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     chunk?: InlineAgentPayloadPart|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     files?: InlineAgentFilePart|null,
     *     internalServerException?: InternalServerException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     returnControl?: InlineAgentReturnControlPayload|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     trace?: InlineAgentTracePart|null,
     *     validationException?: ValidationException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
