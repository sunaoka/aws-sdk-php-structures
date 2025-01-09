<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $forms
 */
class DataProductListingItemAdditionalAttributes extends Shape
{
    /**
     * @param array{forms?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
