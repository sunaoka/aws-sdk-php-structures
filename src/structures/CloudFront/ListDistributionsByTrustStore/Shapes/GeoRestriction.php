<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'blacklist'|'whitelist'|'none' $RestrictionType
 * @property int $Quantity
 * @property list<string>|null $Items
 */
class GeoRestriction extends Shape
{
    /**
     * @param array{
     *     RestrictionType: 'blacklist'|'whitelist'|'none',
     *     Quantity: int,
     *     Items?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
