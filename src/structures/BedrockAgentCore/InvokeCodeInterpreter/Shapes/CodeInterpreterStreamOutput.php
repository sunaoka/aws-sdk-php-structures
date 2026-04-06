<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeInterpreterResult|null $result
 * @property AccessDeniedException|null $accessDeniedException
 * @property ConflictException|null $conflictException
 * @property InternalServerException|null $internalServerException
 * @property ResourceNotFoundException|null $resourceNotFoundException
 * @property ServiceQuotaExceededException|null $serviceQuotaExceededException
 * @property ThrottlingException|null $throttlingException
 * @property ValidationException|null $validationException
 */
class CodeInterpreterStreamOutput extends Shape
{
    /**
     * @param array{
     *     result?: CodeInterpreterResult|null,
     *     accessDeniedException?: AccessDeniedException|null,
     *     conflictException?: ConflictException|null,
     *     internalServerException?: InternalServerException|null,
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
