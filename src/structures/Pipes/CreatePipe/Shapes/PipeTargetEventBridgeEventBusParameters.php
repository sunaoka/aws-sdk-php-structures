<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property string|null $DetailType
 * @property string|null $Source
 * @property list<string>|null $Resources
 * @property string|null $Time
 */
class PipeTargetEventBridgeEventBusParameters extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     DetailType?: string|null,
     *     Source?: string|null,
     *     Resources?: list<string>|null,
     *     Time?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
