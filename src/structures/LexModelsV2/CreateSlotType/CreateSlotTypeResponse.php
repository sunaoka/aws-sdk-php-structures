<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $slotTypeId
 * @property string|null $slotTypeName
 * @property string|null $description
 * @property list<Shapes\SlotTypeValue>|null $slotTypeValues
 * @property Shapes\SlotValueSelectionSetting|null $valueSelectionSetting
 * @property string|null $parentSlotTypeSignature
 * @property string|null $botId
 * @property string|null $botVersion
 * @property string|null $localeId
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property Shapes\ExternalSourceSetting|null $externalSourceSetting
 * @property Shapes\CompositeSlotTypeSetting|null $compositeSlotTypeSetting
 */
class CreateSlotTypeResponse extends Response
{
}
