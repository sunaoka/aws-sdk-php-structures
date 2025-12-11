<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DownlinkConnectionDetails|null $agentConnectionDetails
 */
class DownlinkDataflowDetails extends Shape
{
    /**
     * @param array{agentConnectionDetails?: DownlinkConnectionDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
