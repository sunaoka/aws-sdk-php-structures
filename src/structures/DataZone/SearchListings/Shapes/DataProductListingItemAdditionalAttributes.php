<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $forms
 * @property list<MatchRationaleItem>|null $matchRationale
 */
class DataProductListingItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     forms?: string|null,
     *     matchRationale?: list<MatchRationaleItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
