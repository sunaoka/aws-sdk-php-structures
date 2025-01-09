<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException $accessDeniedException
 * @property BadGatewayException $badGatewayException
 * @property InlineAgentPayloadPart $chunk
 * @property ConflictException $conflictException
 * @property DependencyFailedException $dependencyFailedException
 * @property InlineAgentFilePart $files
 * @property InternalServerException $internalServerException
 * @property ResourceNotFoundException $resourceNotFoundException
 * @property InlineAgentReturnControlPayload $returnControl
 * @property ServiceQuotaExceededException $serviceQuotaExceededException
 * @property ThrottlingException $throttlingException
 * @property InlineAgentTracePart $trace
 * @property ValidationException $validationException
 */
class InlineAgentResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException,
     *     badGatewayException?: BadGatewayException,
     *     chunk?: InlineAgentPayloadPart,
     *     conflictException?: ConflictException,
     *     dependencyFailedException?: DependencyFailedException,
     *     files?: InlineAgentFilePart,
     *     internalServerException?: InternalServerException,
     *     resourceNotFoundException?: ResourceNotFoundException,
     *     returnControl?: InlineAgentReturnControlPayload,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException,
     *     throttlingException?: ThrottlingException,
     *     trace?: InlineAgentTracePart,
     *     validationException?: ValidationException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
