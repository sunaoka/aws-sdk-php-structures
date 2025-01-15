<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $slotId
 * @property string|null $slotName
 * @property string|null $description
 * @property string|null $slotTypeId
 * @property Shapes\SlotValueElicitationSetting|null $valueElicitationSetting
 * @property Shapes\ObfuscationSetting|null $obfuscationSetting
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property string|null $intentId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\MultipleValuesSetting|null $multipleValuesSetting
 * @property Shapes\SubSlotSetting|null $subSlotSetting
 */
class CreateSlotResponse extends Response
{
}
