<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property Shapes\SlotSortBy|null $sortBy
 * @property list<Shapes\SlotFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListSlotsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     intentId: string,
     *     sortBy?: Shapes\SlotSortBy|null,
     *     filters?: list<Shapes\SlotFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
