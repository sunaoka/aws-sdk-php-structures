<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\LexBot $LexBot
 * @property Shapes\LexV2Bot $LexV2Bot
 */
class AssociateBotRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     LexBot?: Shapes\LexBot,
     *     LexV2Bot?: Shapes\LexV2Bot
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
