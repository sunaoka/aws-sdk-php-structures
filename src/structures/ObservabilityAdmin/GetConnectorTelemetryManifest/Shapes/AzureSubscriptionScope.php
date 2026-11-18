<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AllSubscriptions|null $All
 * @property list<string>|null $Ids
 */
class AzureSubscriptionScope extends Shape
{
    /**
     * @param array{
     *     All?: AllSubscriptions|null,
     *     Ids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
