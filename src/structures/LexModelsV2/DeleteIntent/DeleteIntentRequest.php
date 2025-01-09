<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteIntent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intentId
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 */
class DeleteIntentRequest extends Request
{
    /**
     * @param array{
     *     intentId: string,
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
