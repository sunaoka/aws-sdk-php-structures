<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DisassociateDelegationSignerFromDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Id
 */
class DisassociateDelegationSignerFromDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
