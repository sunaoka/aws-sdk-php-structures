<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateLexBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $BotName
 * @property string $LexRegion
 */
class DisassociateLexBotRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     BotName: string,
     *     LexRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
