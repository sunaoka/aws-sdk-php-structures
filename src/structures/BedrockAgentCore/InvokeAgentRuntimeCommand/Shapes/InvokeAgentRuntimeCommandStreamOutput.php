<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeAgentRuntimeCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseChunk|null $chunk
 * @property AccessDeniedException|null $accessDeniedException
 * @property InternalServerException|null $internalServerException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 * @property RuntimeClientError|null $runtimeClientError
 */
class InvokeAgentRuntimeCommandStreamOutput extends Shape
{
    /**
     * @param array{
     *     chunk?: ResponseChunk|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     internalServerException?: InternalServerException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     validationException?: ValidationException|null,
     *     runtimeClientError?: RuntimeClientError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
