<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListIntents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\IntentSortBy $sortBy
 * @property list<Shapes\IntentFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListIntentsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     sortBy?: Shapes\IntentSortBy,
     *     filters?: list<Shapes\IntentFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
