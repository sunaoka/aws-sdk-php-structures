<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlotType;

use Sunaoka\Aws\Structures\Request;

/**
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
class CreateSlotTypeRequest extends Request
{
    /**
     * @param array{
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
