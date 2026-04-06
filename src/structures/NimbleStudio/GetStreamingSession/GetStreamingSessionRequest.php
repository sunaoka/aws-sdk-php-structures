<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionId
 * @property string $studioId
 */
class GetStreamingSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
