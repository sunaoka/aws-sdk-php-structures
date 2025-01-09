<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class Sort extends Shape
{
    /**
     * @param array{
     *     sortBy?: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
