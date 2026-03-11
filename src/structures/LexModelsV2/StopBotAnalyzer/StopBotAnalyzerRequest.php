<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StopBotAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botAnalyzerRequestId
 */
class StopBotAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botAnalyzerRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
