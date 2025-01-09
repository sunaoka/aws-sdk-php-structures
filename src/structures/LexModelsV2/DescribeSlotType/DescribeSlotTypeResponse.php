<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType;

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
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property Shapes\ExternalSourceSetting $externalSourceSetting
 * @property Shapes\CompositeSlotTypeSetting $compositeSlotTypeSetting
 */
class DescribeSlotTypeResponse extends Response
{
}
