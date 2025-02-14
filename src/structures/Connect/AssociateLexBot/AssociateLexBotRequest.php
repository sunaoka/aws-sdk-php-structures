<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateLexBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\LexBot $LexBot
 * @property string|null $ClientToken
 */
class AssociateLexBotRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LexBot: Shapes\LexBot,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
