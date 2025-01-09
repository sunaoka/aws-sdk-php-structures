<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeleteNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $networkArn
 */
class DeleteNetworkRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     networkArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
