<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\RemoveEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property bool|null $ClientIPPreservationEnabled
 */
class EndpointIdentifier extends Shape
{
    /**
     * @param array{
     *     EndpointId: string,
     *     ClientIPPreservationEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
