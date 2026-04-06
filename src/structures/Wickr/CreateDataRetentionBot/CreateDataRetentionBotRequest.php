<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateDataRetentionBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 */
class CreateDataRetentionBotRequest extends Request
{
    /**
     * @param array{networkId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
