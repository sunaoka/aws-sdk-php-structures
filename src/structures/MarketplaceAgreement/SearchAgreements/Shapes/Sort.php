<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     sortBy?: string|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
