<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteUtterances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $localeId
 * @property string $sessionId
 */
class DeleteUtterancesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     localeId?: string,
     *     sessionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
