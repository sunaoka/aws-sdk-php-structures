<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\SendEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContentType
 * @property string|null $Content
 * @property string|null $ClientToken
 * @property string $ConnectionToken
 */
class SendEventRequest extends Request
{
    /**
     * @param array{
     *     ContentType: string,
     *     Content?: string|null,
     *     ClientToken?: string|null,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
