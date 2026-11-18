<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $EventHubName
 * @property string $NamespaceName
 * @property string $FullyQualifiedNamespace
 * @property string|null $Region
 * @property string|null $SubscriptionId
 */
class AzureEventHubSummary extends Shape
{
    /**
     * @param array{
     *     ResourceId: string,
     *     EventHubName: string,
     *     NamespaceName: string,
     *     FullyQualifiedNamespace: string,
     *     Region?: string|null,
     *     SubscriptionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
