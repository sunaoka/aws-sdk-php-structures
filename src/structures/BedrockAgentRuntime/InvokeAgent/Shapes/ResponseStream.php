<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessDeniedException $accessDeniedException
 * @property BadGatewayException $badGatewayException
 * @property PayloadPart $chunk
 * @property ConflictException $conflictException
 * @property DependencyFailedException $dependencyFailedException
 * @property FilePart $files
 * @property InternalServerException $internalServerException
 * @property ModelNotReadyException $modelNotReadyException
 * @property ResourceNotFoundException $resourceNotFoundException
 * @property ReturnControlPayload $returnControl
 * @property ServiceQuotaExceededException $serviceQuotaExceededException
 * @property ThrottlingException $throttlingException
 * @property TracePart $trace
 * @property ValidationException $validationException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     accessDeniedException?: AccessDeniedException,
     *     badGatewayException?: BadGatewayException,
     *     chunk?: PayloadPart,
     *     conflictException?: ConflictException,
     *     dependencyFailedException?: DependencyFailedException,
     *     files?: FilePart,
     *     internalServerException?: InternalServerException,
     *     modelNotReadyException?: ModelNotReadyException,
     *     resourceNotFoundException?: ResourceNotFoundException,
     *     returnControl?: ReturnControlPayload,
     *     serviceQuotaExceededException?: ServiceQuotaExceededException,
     *     throttlingException?: ThrottlingException,
     *     trace?: TracePart,
     *     validationException?: ValidationException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
