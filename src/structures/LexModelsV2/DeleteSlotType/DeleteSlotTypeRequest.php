<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotTypeId
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property bool|null $skipResourceInUseCheck
 */
class DeleteSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     slotTypeId: string,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     skipResourceInUseCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
