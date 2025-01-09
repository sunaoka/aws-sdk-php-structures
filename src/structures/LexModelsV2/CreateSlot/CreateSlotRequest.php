<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotName
 * @property string $description
 * @property string $slotTypeId
 * @property Shapes\SlotValueElicitationSetting $valueElicitationSetting
 * @property Shapes\ObfuscationSetting $obfuscationSetting
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 * @property Shapes\MultipleValuesSetting $multipleValuesSetting
 * @property Shapes\SubSlotSetting $subSlotSetting
 */
class CreateSlotRequest extends Request
{
    /**
     * @param array{
     *     slotName: string,
     *     description?: string,
     *     slotTypeId?: string,
     *     valueElicitationSetting: Shapes\SlotValueElicitationSetting,
     *     obfuscationSetting?: Shapes\ObfuscationSetting,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     intentId: string,
     *     multipleValuesSetting?: Shapes\MultipleValuesSetting,
     *     subSlotSetting?: Shapes\SubSlotSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
