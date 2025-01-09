<?php

namespace Sunaoka\Aws\Structures\Route53Domains\EnableDomainAutoRenew;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class EnableDomainAutoRenewRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
