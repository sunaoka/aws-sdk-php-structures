<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGame;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 */
class GetGameRequest extends Request
{
    /**
     * @param array{GameName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
