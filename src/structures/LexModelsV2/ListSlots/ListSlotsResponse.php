<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $intentId
 * @property list<Shapes\SlotSummary>|null $slotSummaries
 * @property string|null $nextToken
 */
class ListSlotsResponse extends Response
{
}
