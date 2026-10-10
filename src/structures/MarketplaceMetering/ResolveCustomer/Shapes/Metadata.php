<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\ResolveCustomer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AgreementId
 */
class Metadata extends Shape
{
    /**
     * @param array{AgreementId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
