<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotId
 * @property string $slotName
 * @property string|null $description
 * @property string|null $slotTypeId
 * @property Shapes\SlotValueElicitationSetting $valueElicitationSetting
 * @property Shapes\ObfuscationSetting|null $obfuscationSetting
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property Shapes\MultipleValuesSetting|null $multipleValuesSetting
 * @property Shapes\SubSlotSetting|null $subSlotSetting
 */
class UpdateSlotRequest extends Request
{
    /**
     * @param array{
     *     slotId: string,
     *     slotName: string,
     *     description?: string|null,
     *     slotTypeId?: string|null,
     *     valueElicitationSetting: Shapes\SlotValueElicitationSetting,
     *     obfuscationSetting?: Shapes\ObfuscationSetting|null,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     intentId: string,
     *     multipleValuesSetting?: Shapes\MultipleValuesSetting|null,
     *     subSlotSetting?: Shapes\SubSlotSetting|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
