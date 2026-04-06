<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailType
 * @property string|null $EndpointId
 * @property list<string>|null $Resources
 * @property string|null $Source
 * @property string|null $Time
 */
class PipeTargetEventBridgeEventBusParameters extends Shape
{
    /**
     * @param array{
     *     DetailType?: string|null,
     *     EndpointId?: string|null,
     *     Resources?: list<string>|null,
     *     Source?: string|null,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
