<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainTransferability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSFERABLE'|'UNTRANSFERABLE'|'DONT_KNOW'|'DOMAIN_IN_OWN_ACCOUNT'|'DOMAIN_IN_ANOTHER_ACCOUNT'|'PREMIUM_DOMAIN'|null $Transferable
 */
class DomainTransferability extends Shape
{
    /**
     * @param array{Transferable?: 'TRANSFERABLE'|'UNTRANSFERABLE'|'DONT_KNOW'|'DOMAIN_IN_OWN_ACCOUNT'|'DOMAIN_IN_ANOTHER_ACCOUNT'|'PREMIUM_DOMAIN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
