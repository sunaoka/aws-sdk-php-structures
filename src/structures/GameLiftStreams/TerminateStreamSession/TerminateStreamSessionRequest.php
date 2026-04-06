<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\TerminateStreamSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $StreamSessionIdentifier
 */
class TerminateStreamSessionRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     StreamSessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
