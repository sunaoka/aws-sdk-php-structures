<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAddress
 * @property FilterPortRange $SourcePortRange
 * @property string $DestinationAddress
 * @property FilterPortRange $DestinationPortRange
 */
class PathFilter extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: string,
     *     SourcePortRange?: FilterPortRange,
     *     DestinationAddress?: string,
     *     DestinationPortRange?: FilterPortRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
