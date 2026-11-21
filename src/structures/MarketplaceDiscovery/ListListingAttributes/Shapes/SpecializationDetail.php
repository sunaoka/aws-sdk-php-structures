<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Specialization|null $specialization
 * @property SpecializationCategory|null $specializationCategory
 */
class SpecializationDetail extends Shape
{
    /**
     * @param array{
     *     specialization?: Specialization|null,
     *     specializationCategory?: SpecializationCategory|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
