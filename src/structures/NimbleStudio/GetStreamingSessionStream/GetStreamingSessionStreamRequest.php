<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSessionStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionId
 * @property string $streamId
 * @property string $studioId
 */
class GetStreamingSessionStreamRequest extends Request
{
    /**
     * @param array{
     *     sessionId: string,
     *     streamId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
