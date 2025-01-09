<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 */
class DescribeBotVersionRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
