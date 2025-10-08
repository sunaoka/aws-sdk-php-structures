<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string|null $nodeId
 * @property list<MatterCapabilityReportEndpoint> $endpoints
 */
class MatterCapabilityReport extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     nodeId?: string|null,
     *     endpoints: list<MatterCapabilityReportEndpoint>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
