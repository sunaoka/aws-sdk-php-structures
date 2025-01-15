<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535>|null $FromPort
 * @property int<0, 65535>|null $ToPort
 */
class FilterPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<0, 65535>|null,
     *     ToPort?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
