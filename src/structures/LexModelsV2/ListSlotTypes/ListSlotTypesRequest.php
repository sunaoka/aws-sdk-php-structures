<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\SlotTypeSortBy|null $sortBy
 * @property list<Shapes\SlotTypeFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListSlotTypesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     sortBy?: Shapes\SlotTypeSortBy|null,
     *     filters?: list<Shapes\SlotTypeFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
