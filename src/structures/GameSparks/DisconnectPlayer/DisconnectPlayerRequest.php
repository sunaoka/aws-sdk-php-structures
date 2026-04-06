<?php

namespace Sunaoka\Aws\Structures\GameSparks\DisconnectPlayer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property string $PlayerId
 * @property string $StageName
 */
class DisconnectPlayerRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     PlayerId: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
