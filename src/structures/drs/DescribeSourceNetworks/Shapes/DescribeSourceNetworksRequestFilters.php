<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $sourceNetworkIDs
 * @property string|null $originAccountID
 * @property string|null $originRegion
 */
class DescribeSourceNetworksRequestFilters extends Shape
{
    /**
     * @param array{
     *     sourceNetworkIDs?: list<string>|null,
     *     originAccountID?: string|null,
     *     originRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
