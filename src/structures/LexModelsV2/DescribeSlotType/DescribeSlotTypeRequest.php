<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotTypeId
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 */
class DescribeSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     slotTypeId: string,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
