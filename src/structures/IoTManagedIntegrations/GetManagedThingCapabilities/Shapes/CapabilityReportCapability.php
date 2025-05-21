<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingCapabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $version
 * @property list<string> $properties
 * @property list<string> $actions
 * @property list<string> $events
 */
class CapabilityReportCapability extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     version: string,
     *     properties: list<string>,
     *     actions: list<string>,
     *     events: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
