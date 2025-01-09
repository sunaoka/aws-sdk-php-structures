<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botAliasId
 * @property string $botId
 */
class DescribeBotAliasRequest extends Request
{
    /**
     * @param array{
     *     botAliasId: string,
     *     botId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
