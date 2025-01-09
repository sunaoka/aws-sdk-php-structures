<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $RequestId
 * @property array<string, array<string, EndpointMessageResult>> $Result
 */
class SendUsersMessageResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     RequestId?: string,
     *     Result?: array<string, array<string, EndpointMessageResult>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
