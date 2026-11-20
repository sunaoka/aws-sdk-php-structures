<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompanyName
 */
class CustomerAccountDetailsSummary extends Shape
{
    /**
     * @param array{CompanyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
