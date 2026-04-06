<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendManagedThingCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $ref
 * @property string|null $actionTraceId
 * @property CapabilityProperties|null $parameters
 */
class CapabilityAction extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     ref?: string|null,
     *     actionTraceId?: string|null,
     *     parameters?: CapabilityProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
