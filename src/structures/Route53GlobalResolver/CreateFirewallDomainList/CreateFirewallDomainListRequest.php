<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $globalResolverId
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateFirewallDomainListRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     globalResolverId: string,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
