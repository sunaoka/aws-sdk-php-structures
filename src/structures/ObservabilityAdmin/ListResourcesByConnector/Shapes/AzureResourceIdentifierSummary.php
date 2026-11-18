<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string|null $ResourceType
 * @property string|null $Region
 * @property string|null $SubscriptionId
 * @property array<string, string>|null $Tags
 */
class AzureResourceIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ResourceType?: string|null,
     *     Region?: string|null,
     *     SubscriptionId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
