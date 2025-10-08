<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendConnectorEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<string> $deviceTypes
 * @property list<MatterCapabilityReportCluster> $clusters
 * @property list<string>|null $parts
 * @property list<string>|null $semanticTags
 * @property list<string>|null $clientClusters
 */
class MatterCapabilityReportEndpoint extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     deviceTypes: list<string>,
     *     clusters: list<MatterCapabilityReportCluster>,
     *     parts?: list<string>|null,
     *     semanticTags?: list<string>|null,
     *     clientClusters?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
