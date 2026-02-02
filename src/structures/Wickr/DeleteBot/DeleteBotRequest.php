<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $botId
 */
class DeleteBotRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     botId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
