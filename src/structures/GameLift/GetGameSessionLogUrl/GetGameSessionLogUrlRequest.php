<?php

namespace Sunaoka\Aws\Structures\GameLift\GetGameSessionLogUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 */
class GetGameSessionLogUrlRequest extends Request
{
    /**
     * @param array{GameSessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
