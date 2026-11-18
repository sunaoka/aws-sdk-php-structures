<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Standard'|'Premium' $Tier
 * @property int<1, 100> $PartitionCount
 */
class AzureEventHubConfiguration extends Shape
{
    /**
     * @param array{
     *     Tier: 'Standard'|'Premium',
     *     PartitionCount: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
