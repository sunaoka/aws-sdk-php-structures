<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateDNSView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $globalResolverId
 * @property string|null $clientToken
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $dnssecValidation
 * @property 'ENABLED'|'DISABLED'|null $ednsClientSubnet
 * @property 'ENABLED'|'DISABLED'|null $firewallRulesFailOpen
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateDNSViewRequest extends Request
{
    /**
     * @param array{
     *     globalResolverId: string,
     *     clientToken?: string|null,
     *     name: string,
     *     dnssecValidation?: 'ENABLED'|'DISABLED'|null,
     *     ednsClientSubnet?: 'ENABLED'|'DISABLED'|null,
     *     firewallRulesFailOpen?: 'ENABLED'|'DISABLED'|null,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
