<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotResourceGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $generationInputPrompt
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 */
class StartBotResourceGenerationRequest extends Request
{
    /**
     * @param array{
     *     generationInputPrompt: string,
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
