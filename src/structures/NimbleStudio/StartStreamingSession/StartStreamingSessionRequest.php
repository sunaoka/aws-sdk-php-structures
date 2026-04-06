<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\StartStreamingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $backupId
 * @property string|null $clientToken
 * @property string $sessionId
 * @property string $studioId
 */
class StartStreamingSessionRequest extends Request
{
    /**
     * @param array{
     *     backupId?: string|null,
     *     clientToken?: string|null,
     *     sessionId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
