<?php

namespace Sunaoka\Aws\Structures\GameLift\CreatePlayerSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property string $PlayerId
 * @property string $PlayerData
 */
class CreatePlayerSessionRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     PlayerId: string,
     *     PlayerData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
