<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceAddress
 * @property FilterPortRange|null $SourcePortRange
 * @property string|null $DestinationAddress
 * @property FilterPortRange|null $DestinationPortRange
 */
class PathFilter extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: string|null,
     *     SourcePortRange?: FilterPortRange|null,
     *     DestinationAddress?: string|null,
     *     DestinationPortRange?: FilterPortRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
