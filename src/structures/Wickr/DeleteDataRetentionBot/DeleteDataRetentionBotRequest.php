<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteDataRetentionBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class DeleteDataRetentionBotRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
