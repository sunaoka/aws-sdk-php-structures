<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StopStreamingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $sessionId
 * @property string $studioId
 * @property 'RETAIN'|'DELETE'|null $volumeRetentionMode
 */
class StopStreamingSessionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     sessionId: string,
     *     studioId: string,
     *     volumeRetentionMode?: 'RETAIN'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
