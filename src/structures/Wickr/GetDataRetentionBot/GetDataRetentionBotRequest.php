<?php

namespace Sunaoka\Aws\Structures\Wickr\GetDataRetentionBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class GetDataRetentionBotRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
