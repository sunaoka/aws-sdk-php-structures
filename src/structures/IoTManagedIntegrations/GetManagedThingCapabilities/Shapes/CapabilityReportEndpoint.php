<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThingCapabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<string> $deviceTypes
 * @property list<CapabilityReportCapability> $capabilities
 */
class CapabilityReportEndpoint extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     deviceTypes: list<string>,
     *     capabilities: list<CapabilityReportCapability>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
