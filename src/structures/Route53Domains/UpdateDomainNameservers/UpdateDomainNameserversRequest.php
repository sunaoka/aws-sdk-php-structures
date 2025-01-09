<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainNameservers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $FIAuthKey
 * @property list<Shapes\Nameserver> $Nameservers
 */
class UpdateDomainNameserversRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     FIAuthKey?: string,
     *     Nameservers: list<Shapes\Nameserver>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
