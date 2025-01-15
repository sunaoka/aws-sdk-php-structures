<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteUtterances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string|null $localeId
 * @property string|null $sessionId
 */
class DeleteUtterancesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     localeId?: string|null,
     *     sessionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
