<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Region'|'SagemakerOption' $labelType
 * @property string $labelValue
 * @property string|null $displayName
 */
class DimensionLabel extends Shape
{
    /**
     * @param array{
     *     labelType: 'Region'|'SagemakerOption',
     *     labelValue: string,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
