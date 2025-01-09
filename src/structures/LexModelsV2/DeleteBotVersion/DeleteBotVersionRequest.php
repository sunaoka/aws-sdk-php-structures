<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property bool $skipResourceInUseCheck
 */
class DeleteBotVersionRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     skipResourceInUseCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
