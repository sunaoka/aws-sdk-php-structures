<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingSessionStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property int<60, 3600>|null $expirationInSeconds
 * @property string $sessionId
 * @property string $studioId
 */
class CreateStreamingSessionStreamRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     expirationInSeconds?: int<60, 3600>|null,
     *     sessionId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
