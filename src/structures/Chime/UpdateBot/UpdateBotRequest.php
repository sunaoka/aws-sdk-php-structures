<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BotId
 * @property bool|null $Disabled
 */
class UpdateBotRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BotId: string,
     *     Disabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
