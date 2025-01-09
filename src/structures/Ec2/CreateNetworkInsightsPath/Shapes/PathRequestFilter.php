<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceAddress
 * @property RequestFilterPortRange $SourcePortRange
 * @property string $DestinationAddress
 * @property RequestFilterPortRange $DestinationPortRange
 */
class PathRequestFilter extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: string,
     *     SourcePortRange?: RequestFilterPortRange,
     *     DestinationAddress?: string,
     *     DestinationPortRange?: RequestFilterPortRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
