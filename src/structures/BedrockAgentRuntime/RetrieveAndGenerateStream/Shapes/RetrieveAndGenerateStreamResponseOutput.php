<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 * @property CitationEvent|null $citation
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property GuardrailEvent|null $guardrail
 * @property InternalServerException|null $internalServerException
 * @property RetrieveAndGenerateOutputEvent|null $output
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 */
class RetrieveAndGenerateStreamResponseOutput extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     citation?: CitationEvent|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     guardrail?: GuardrailEvent|null,
     *     internalServerException?: InternalServerException|null,
     *     output?: RetrieveAndGenerateOutputEvent|null,
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
