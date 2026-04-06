<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGame;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $GameName
 */
class UpdateGameRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GameName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
