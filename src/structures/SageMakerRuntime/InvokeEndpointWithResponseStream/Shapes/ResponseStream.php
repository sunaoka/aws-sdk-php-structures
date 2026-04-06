<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PayloadPart|null $PayloadPart
 * @property ModelStreamError|null $ModelStreamError
 * @property InternalStreamFailure|null $InternalStreamFailure
 */
class ResponseStream extends Shape
{
    /**
     * @param array{
     *     PayloadPart?: PayloadPart|null,
     *     ModelStreamError?: ModelStreamError|null,
     *     InternalStreamFailure?: InternalStreamFailure|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
