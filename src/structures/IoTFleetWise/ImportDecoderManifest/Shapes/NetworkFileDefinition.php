<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CanDbcDefinition $canDbc
 */
class NetworkFileDefinition extends Shape
{
    /**
     * @param array{canDbc?: CanDbcDefinition} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
