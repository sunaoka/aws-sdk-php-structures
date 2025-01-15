<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $originAccountID
 * @property string|null $originRegion
 * @property list<string>|null $sourceNetworkIDs
 */
class DescribeSourceNetworksRequestFilters extends Shape
{
    /**
     * @param array{
     *     originAccountID?: string|null,
     *     originRegion?: string|null,
     *     sourceNetworkIDs?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
