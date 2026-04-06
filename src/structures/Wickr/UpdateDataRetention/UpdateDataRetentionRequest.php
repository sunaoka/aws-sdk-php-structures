<?php

namespace Sunaoka\Aws\Structures\Wickr\UpdateDataRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property 'ENABLE'|'DISABLE'|'PUBKEY_MSG_ACK' $actionType
 */
class UpdateDataRetentionRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     actionType: 'ENABLE'|'DISABLE'|'PUBKEY_MSG_ACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
