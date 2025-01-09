<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 65535> $FromPort
 * @property int<0, 65535> $ToPort
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     FromPort: int<0, 65535>,
     *     ToPort: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
