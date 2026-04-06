<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\DeleteNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $networkArn
 */
class DeleteNetworkRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     networkArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
