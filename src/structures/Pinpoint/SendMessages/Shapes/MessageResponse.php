<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property array<string, EndpointMessageResult> $EndpointResult
 * @property string $RequestId
 * @property array<string, MessageResult> $Result
 */
class MessageResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointResult?: array<string, EndpointMessageResult>,
     *     RequestId?: string,
     *     Result?: array<string, MessageResult>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
