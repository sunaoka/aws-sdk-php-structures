<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException|null $accessDeniedException
 * @property BadGatewayException|null $badGatewayException
 * @property PayloadPart|null $chunk
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property FilePart|null $files
 * @property InternalServerException|null $internalServerException
 * @property ModelNotReadyException|null $modelNotReadyException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ReturnControlPayload|null $returnControl
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property TracePart|null $trace
 * @property ValidationException|null $validationException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     chunk?: PayloadPart|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     files?: FilePart|null,
     *     internalServerException?: InternalServerException|null,
     *     modelNotReadyException?: ModelNotReadyException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     returnControl?: ReturnControlPayload|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     trace?: TracePart|null,
     *     validationException?: ValidationException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
