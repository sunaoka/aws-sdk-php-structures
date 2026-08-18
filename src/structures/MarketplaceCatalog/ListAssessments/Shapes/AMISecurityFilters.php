<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeliveryOptionId
 */
class AMISecurityFilters extends Shape
{
    /**
     * @param array{DeliveryOptionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
