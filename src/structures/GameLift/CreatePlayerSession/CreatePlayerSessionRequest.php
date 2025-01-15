<?php

namespace Sunaoka\Aws\Structures\GameLift\CreatePlayerSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameSessionId
 * @property string $PlayerId
 * @property string|null $PlayerData
 */
class CreatePlayerSessionRequest extends Request
{
    /**
     * @param array{
     *     GameSessionId: string,
     *     PlayerId: string,
     *     PlayerData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
