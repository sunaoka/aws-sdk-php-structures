<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteGameSessionQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteGameSessionQueueRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
