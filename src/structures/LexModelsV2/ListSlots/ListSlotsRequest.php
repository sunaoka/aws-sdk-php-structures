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
 * @property int<1, 1000> $maxResults
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
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
