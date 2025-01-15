<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\SendMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContentType
 * @property string $Content
 * @property string|null $ClientToken
 * @property string $ConnectionToken
 */
class SendMessageRequest extends Request
{
    /**
     * @param array{
     *     ContentType: string,
     *     Content: string,
     *     ClientToken?: string|null,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
