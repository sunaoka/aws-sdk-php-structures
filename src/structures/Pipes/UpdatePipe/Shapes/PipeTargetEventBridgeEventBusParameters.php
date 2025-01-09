<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property string $DetailType
 * @property string $Source
 * @property list<string> $Resources
 * @property string $Time
 */
class PipeTargetEventBridgeEventBusParameters extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     DetailType?: string,
     *     Source?: string,
     *     Resources?: list<string>,
     *     Time?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
