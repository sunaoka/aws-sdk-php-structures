<?php

namespace Sunaoka\Aws\Structures\AppRunner\DisassociateCustomDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $DomainName
 */
class DisassociateCustomDomainRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
