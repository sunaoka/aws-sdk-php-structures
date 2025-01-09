<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\MessageRequest $MessageRequest
 */
class SendMessagesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MessageRequest: Shapes\MessageRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
