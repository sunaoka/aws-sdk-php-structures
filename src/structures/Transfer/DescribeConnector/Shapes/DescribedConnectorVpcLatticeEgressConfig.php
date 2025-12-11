<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceConfigurationArn
 * @property int<1, 65535>|null $PortNumber
 */
class DescribedConnectorVpcLatticeEgressConfig extends Shape
{
    /**
     * @param array{
     *     ResourceConfigurationArn: string,
     *     PortNumber?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
