<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotTypeName
 * @property string $description
 * @property list<Shapes\SlotTypeValue> $slotTypeValues
 * @property Shapes\SlotValueSelectionSetting $valueSelectionSetting
 * @property string $parentSlotTypeSignature
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\ExternalSourceSetting $externalSourceSetting
 * @property Shapes\CompositeSlotTypeSetting $compositeSlotTypeSetting
 */
class CreateSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     slotTypeName: string,
     *     description?: string,
     *     slotTypeValues?: list<Shapes\SlotTypeValue>,
     *     valueSelectionSetting?: Shapes\SlotValueSelectionSetting,
     *     parentSlotTypeSignature?: string,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     externalSourceSetting?: Shapes\ExternalSourceSetting,
     *     compositeSlotTypeSetting?: Shapes\CompositeSlotTypeSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
