<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USE_CASE'|'INDUSTRY'|'SERVICES' $specializationType
 * @property string $displayName
 */
class SpecializationTypeDetail extends Shape
{
    /**
     * @param array{
     *     specializationType: 'USE_CASE'|'INDUSTRY'|'SERVICES',
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
