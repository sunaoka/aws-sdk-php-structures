<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $minimumValue
 * @property string $maximumValue
 * @property string $defaultValue
 */
class PercentageRange extends Shape
{
    /**
     * @param array{
     *     minimumValue: string,
     *     maximumValue: string,
     *     defaultValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
