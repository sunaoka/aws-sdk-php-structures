<?php

namespace Sunaoka\Aws\Structures\GameLift\TerminateGameSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property 'TRIGGER_ON_PROCESS_TERMINATE'|'FORCE_TERMINATE' $TerminationMode
 */
class TerminateGameSessionRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     TerminationMode: 'TRIGGER_ON_PROCESS_TERMINATE'|'FORCE_TERMINATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
