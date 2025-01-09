<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'blacklist'|'whitelist'|'none' $RestrictionType
 * @property int $Quantity
 * @property list<string> $Items
 */
class GeoRestriction extends Shape
{
    /**
     * @param array{
     *     RestrictionType: 'blacklist'|'whitelist'|'none',
     *     Quantity: int,
     *     Items?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
