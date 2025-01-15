<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendOTPMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property array<string, EndpointMessageResult>|null $EndpointResult
 * @property string|null $RequestId
 * @property array<string, MessageResult>|null $Result
 */
class MessageResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointResult?: array<string, EndpointMessageResult>|null,
     *     RequestId?: string|null,
     *     Result?: array<string, MessageResult>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
