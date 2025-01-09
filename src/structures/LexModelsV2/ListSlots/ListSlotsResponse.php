<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property list<Shapes\SlotSummary> $slotSummaries
 * @property string $nextToken
 */
class ListSlotsResponse extends Response
{
}
