<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlotTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\SlotTypeSortBy $sortBy
 * @property list<Shapes\SlotTypeFilter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSlotTypesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     sortBy?: Shapes\SlotTypeSortBy,
     *     filters?: list<Shapes\SlotTypeFilter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
