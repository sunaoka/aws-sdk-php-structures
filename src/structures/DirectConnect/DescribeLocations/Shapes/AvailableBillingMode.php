<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|'PortPairFlatRateTier1'|'PortPairFlatRateTier2'|'PortPairFlatRateTier3'|'PortPairFlatRateTier4'|'PortPairFlatRateTier5'|null $billingMode
 * @property list<string>|null $availablePortSpeeds
 * @property list<string>|null $includedRegions
 */
class AvailableBillingMode extends Shape
{
    /**
     * @param array{
     *     billingMode?: 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'|'PortPairFlatRateTier1'|'PortPairFlatRateTier2'|'PortPairFlatRateTier3'|'PortPairFlatRateTier4'|'PortPairFlatRateTier5'|null,
     *     availablePortSpeeds?: list<string>|null,
     *     includedRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
