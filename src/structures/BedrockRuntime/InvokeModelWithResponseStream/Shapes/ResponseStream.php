<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PayloadPart|null $chunk
 * @property InternalServerException|null $internalServerException
 * @property ModelStreamErrorException|null $modelStreamErrorException
 * @property ValidationException|null $validationException
 * @property ThrottlingException|null $throttlingException
 * @property ModelTimeoutException|null $modelTimeoutException
 * @property ServiceUnavailableException|null $serviceUnavailableException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     chunk?: PayloadPart|null,
     *     internalServerException?: InternalServerException|null,
     *     modelStreamErrorException?: ModelStreamErrorException|null,
     *     validationException?: ValidationException|null,
     *     throttlingException?: ThrottlingException|null,
     *     modelTimeoutException?: ModelTimeoutException|null,
     *     serviceUnavailableException?: ServiceUnavailableException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
