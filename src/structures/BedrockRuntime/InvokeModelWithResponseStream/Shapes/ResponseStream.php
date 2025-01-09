<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PayloadPart $chunk
 * @property InternalServerException $internalServerException
 * @property ModelStreamErrorException $modelStreamErrorException
 * @property ValidationException $validationException
 * @property ThrottlingException $throttlingException
 * @property ModelTimeoutException $modelTimeoutException
 * @property ServiceUnavailableException $serviceUnavailableException
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     chunk?: PayloadPart,
     *     internalServerException?: InternalServerException,
     *     modelStreamErrorException?: ModelStreamErrorException,
     *     validationException?: ValidationException,
     *     throttlingException?: ThrottlingException,
     *     modelTimeoutException?: ModelTimeoutException,
     *     serviceUnavailableException?: ServiceUnavailableException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
