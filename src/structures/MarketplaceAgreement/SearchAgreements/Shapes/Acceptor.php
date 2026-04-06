<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 */
class Acceptor extends Shape
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
