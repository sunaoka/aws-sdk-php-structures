<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PayloadPart|null $chunk
 * @property TracePart|null $trace
 * @property ReturnControlPayload|null $returnControl
 * @property InternalServerException|null $internalServerException
 * @property ValidationException|null $validationException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictException|null $conflictException
 * @property DependencyFailedException|null $dependencyFailedException
 * @property BadGatewayException|null $badGatewayException
 * @property ModelNotReadyException|null $modelNotReadyException
 * @property FilePart|null $files
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     chunk?: PayloadPart|null,
     *     trace?: TracePart|null,
     *     returnControl?: ReturnControlPayload|null,
     *     internalServerException?: InternalServerException|null,
     *     validationException?: ValidationException|null,
     *     resourceNotFoundException?: ResourceNotFoundException|null,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException|null,
     *     throttlingException?: ThrottlingException|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictException?: ConflictException|null,
     *     dependencyFailedException?: DependencyFailedException|null,
     *     badGatewayException?: BadGatewayException|null,
     *     modelNotReadyException?: ModelNotReadyException|null,
     *     files?: FilePart|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
