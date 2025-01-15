<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotTypeId
 * @property string $slotTypeName
 * @property string|null $description
 * @property list<Shapes\SlotTypeValue>|null $slotTypeValues
 * @property Shapes\SlotValueSelectionSetting|null $valueSelectionSetting
 * @property string|null $parentSlotTypeSignature
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property Shapes\ExternalSourceSetting|null $externalSourceSetting
 * @property Shapes\CompositeSlotTypeSetting|null $compositeSlotTypeSetting
 */
class UpdateSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     slotTypeId: string,
     *     slotTypeName: string,
     *     description?: string|null,
     *     slotTypeValues?: list<Shapes\SlotTypeValue>|null,
     *     valueSelectionSetting?: Shapes\SlotValueSelectionSetting|null,
     *     parentSlotTypeSignature?: string|null,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     externalSourceSetting?: Shapes\ExternalSourceSetting|null,
     *     compositeSlotTypeSetting?: Shapes\CompositeSlotTypeSetting|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
