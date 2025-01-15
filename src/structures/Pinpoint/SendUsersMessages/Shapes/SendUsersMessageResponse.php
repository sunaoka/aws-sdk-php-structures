<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string|null $RequestId
 * @property array<string, array<string, EndpointMessageResult>>|null $Result
 */
class SendUsersMessageResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     RequestId?: string|null,
     *     Result?: array<string, array<string, EndpointMessageResult>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
