<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetDestinationEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Code
 * @property string $Message
 */
class BatchGetDestinationEndpointError extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Code: string,
     *     Message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
