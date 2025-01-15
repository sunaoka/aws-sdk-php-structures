<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $networkName
 * @property array<string, string>|null $tags
 */
class CreateNetworkRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     networkName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
