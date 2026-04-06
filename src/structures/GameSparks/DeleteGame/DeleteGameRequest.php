<?php

namespace Sunaoka\Aws\Structures\GameSparks\DeleteGame;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 */
class DeleteGameRequest extends Request
{
    /**
     * @param array{GameName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
