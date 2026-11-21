<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $specializationCategoryId
 * @property string $specializationCategoryName
 * @property string $parentSpecializationId
 */
class SpecializationCategory extends Shape
{
    /**
     * @param array{
     *     specializationCategoryId: string,
     *     specializationCategoryName: string,
     *     parentSpecializationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
