<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\SendUsersMessageRequest $SendUsersMessageRequest
 */
class SendUsersMessagesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SendUsersMessageRequest: Shapes\SendUsersMessageRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
