<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 */
class ListBotReplicasRequest extends Request
{
    /**
     * @param array{botId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
