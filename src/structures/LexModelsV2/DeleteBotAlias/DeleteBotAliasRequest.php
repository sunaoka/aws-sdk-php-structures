<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botAliasId
 * @property string $botId
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteBotAliasRequest extends Request
{
    /**
     * @param array{
     *     botAliasId: string,
     *     botId: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
