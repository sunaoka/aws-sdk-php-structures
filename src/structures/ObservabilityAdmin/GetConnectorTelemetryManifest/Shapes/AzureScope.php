<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureSubscriptionScope|null $Subscriptions
 * @property list<string>|null $Regions
 * @property list<string>|null $ResourceTypes
 * @property list<TagFilter>|null $TagFilters
 * @property list<AzureResourceIdScope>|null $Resources
 */
class AzureScope extends Shape
{
    /**
     * @param array{
     *     Subscriptions?: AzureSubscriptionScope|null,
     *     Regions?: list<string>|null,
     *     ResourceTypes?: list<string>|null,
     *     TagFilters?: list<TagFilter>|null,
     *     Resources?: list<AzureResourceIdScope>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
