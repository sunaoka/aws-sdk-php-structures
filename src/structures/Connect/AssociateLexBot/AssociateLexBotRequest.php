<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateLexBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\LexBot $LexBot
 */
class AssociateLexBotRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LexBot: Shapes\LexBot
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
