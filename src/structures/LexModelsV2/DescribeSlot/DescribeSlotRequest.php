<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeSlot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $slotId
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 * @property string $intentId
 */
class DescribeSlotRequest extends Request
{
    /**
     * @param array{
     *     slotId: string,
     *     botId: string,
     *     botVersion: string,
     *     localeId: string,
     *     intentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
