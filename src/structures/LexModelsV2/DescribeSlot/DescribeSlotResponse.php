<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $slotId
 * @property string $slotName
 * @property string $description
 * @property string $slotTypeId
 * @property Shapes\SlotValueElicitationSetting $valueElicitationSetting
 * @property Shapes\ObfuscationSetting $obfuscationSetting
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property Shapes\MultipleValuesSetting $multipleValuesSetting
 * @property Shapes\SubSlotSetting $subSlotSetting
 */
class DescribeSlotResponse extends Response
{
}
