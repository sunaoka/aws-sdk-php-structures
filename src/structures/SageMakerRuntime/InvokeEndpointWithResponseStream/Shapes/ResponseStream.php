<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PayloadPart $PayloadPart
 * @property ModelStreamError $ModelStreamError
 * @property InternalStreamFailure $InternalStreamFailure
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     PayloadPart?: PayloadPart,
     *     ModelStreamError?: ModelStreamError,
     *     InternalStreamFailure?: InternalStreamFailure
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
