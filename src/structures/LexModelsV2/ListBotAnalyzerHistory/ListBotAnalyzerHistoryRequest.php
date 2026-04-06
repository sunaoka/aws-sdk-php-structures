<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAnalyzerHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string|null $localeId
 * @property string|null $botVersion
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListBotAnalyzerHistoryRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     localeId?: string|null,
     *     botVersion?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
