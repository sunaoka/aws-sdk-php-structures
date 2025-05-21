<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateManagedThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string|null $nodeId
 * @property list<CapabilityReportEndpoint> $endpoints
 */
class CapabilityReport extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     nodeId?: string|null,
     *     endpoints: list<CapabilityReportEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
