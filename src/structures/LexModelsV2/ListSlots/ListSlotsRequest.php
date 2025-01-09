<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property Shapes\SlotSortBy $sortBy
 * @property list<Shapes\SlotFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSlotsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     intentId: string,
     *     sortBy?: Shapes\SlotSortBy,
     *     filters?: list<Shapes\SlotFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
