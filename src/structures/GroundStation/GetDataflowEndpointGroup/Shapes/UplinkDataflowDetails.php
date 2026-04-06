<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UplinkConnectionDetails|null $agentConnectionDetails
 */
class UplinkDataflowDetails extends Shape
{
    /**
     * @param array{agentConnectionDetails?: UplinkConnectionDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
