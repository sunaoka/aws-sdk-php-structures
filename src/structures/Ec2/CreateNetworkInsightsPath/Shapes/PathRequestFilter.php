<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceAddress
 * @property RequestFilterPortRange|null $SourcePortRange
 * @property string|null $DestinationAddress
 * @property RequestFilterPortRange|null $DestinationPortRange
 */
class PathRequestFilter extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: string|null,
     *     SourcePortRange?: RequestFilterPortRange|null,
     *     DestinationAddress?: string|null,
     *     DestinationPortRange?: RequestFilterPortRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
