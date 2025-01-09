<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $networkName
 * @property array<string, string> $tags
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     networkName: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
