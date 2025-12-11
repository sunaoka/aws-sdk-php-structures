<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceConfigurationArn
 * @property int<1, 65535>|null $PortNumber
 */
class UpdateConnectorVpcLatticeEgressConfig extends Shape
{
    /**
     * @param array{
     *     ResourceConfigurationArn?: string|null,
     *     PortNumber?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
