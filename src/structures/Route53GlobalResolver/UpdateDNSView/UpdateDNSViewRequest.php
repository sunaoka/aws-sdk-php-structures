<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateDNSView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dnsViewId
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $dnssecValidation
 * @property 'ENABLED'|'DISABLED'|null $ednsClientSubnet
 * @property 'ENABLED'|'DISABLED'|null $firewallRulesFailOpen
 */
class UpdateDNSViewRequest extends Request
{
    /**
     * @param array{
     *     dnsViewId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     dnssecValidation?: 'ENABLED'|'DISABLED'|null,
     *     ednsClientSubnet?: 'ENABLED'|'DISABLED'|null,
     *     firewallRulesFailOpen?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
