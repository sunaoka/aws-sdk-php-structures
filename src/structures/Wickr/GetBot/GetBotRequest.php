<?php

namespace Sunaoka\Aws\Structures\Wickr\GetBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $botId
 */
class GetBotRequest extends Request
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
