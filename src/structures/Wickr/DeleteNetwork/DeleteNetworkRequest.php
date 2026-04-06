<?php

namespace Sunaoka\Aws\Structures\Wickr\DeleteNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string|null $clientToken
 */
class DeleteNetworkRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
