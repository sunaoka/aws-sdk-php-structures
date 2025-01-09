<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException $accessDeniedException
 * @property BadGatewayException $badGatewayException
 * @property CitationEvent $citation
 * @property ConflictException $conflictException
 * @property DependencyFailedException $dependencyFailedException
 * @property GuardrailEvent $guardrail
 * @property InternalServerException $internalServerException
 * @property RetrieveAndGenerateOutputEvent $output
 * @property ResourceNotFoundException $resourceNotFoundException
 * @property ServiceQuotaExceededException $serviceQuotaExceededException
 * @property ThrottlingException $throttlingException
 * @property ValidationException $validationException
 */
class RetrieveAndGenerateStreamResponseOutput extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException,
     *     badGatewayException?: BadGatewayException,
     *     citation?: CitationEvent,
     *     conflictException?: ConflictException,
     *     dependencyFailedException?: DependencyFailedException,
     *     guardrail?: GuardrailEvent,
     *     internalServerException?: InternalServerException,
     *     output?: RetrieveAndGenerateOutputEvent,
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
