<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $slotTypeId
 * @property string $slotTypeName
 * @property string $description
 * @property list<Shapes\SlotTypeValue> $slotTypeValues
 * @property Shapes\SlotValueSelectionSetting $valueSelectionSetting
 * @property string $parentSlotTypeSignature
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property Shapes\ExternalSourceSetting $externalSourceSetting
 * @property Shapes\CompositeSlotTypeSetting $compositeSlotTypeSetting
 */
class CreateSlotTypeResponse extends Response
{
}
