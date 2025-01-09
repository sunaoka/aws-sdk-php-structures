<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $originAccountID
 * @property string $originRegion
 * @property list<string> $sourceNetworkIDs
 */
class DescribeSourceNetworksRequestFilters extends Shape
{
    /**
     * @param array{
     *     originAccountID?: string,
     *     originRegion?: string,
     *     sourceNetworkIDs?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
