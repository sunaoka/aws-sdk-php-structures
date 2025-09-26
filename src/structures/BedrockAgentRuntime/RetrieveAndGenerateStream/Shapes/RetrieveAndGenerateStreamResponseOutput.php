<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrieveAndGenerateOutputEvent|null $output
 * @property CitationEvent|null $citation
 * @property GuardrailEvent|null $guardrail
 * @property InternalServerException|null $internalServerException
 * @property ValidationException|null $validationException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property BadGatewayException|null $badGatewayException
 */
class RetrieveAndGenerateStreamResponseOutput extends Shape
{
    /**
     * @param array{
     *     output?: RetrieveAndGenerateOutputEvent|null,
     *     citation?: CitationEvent|null,
     *     guardrail?: GuardrailEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     validationException?: ValidationException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     badGatewayException?: BadGatewayException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
