<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubscriptionId
 * @property string|null $DisplayName
 * @property string|null $State
 * @property string|null $ManagementGroupId
 */
class AzureSubscriptionSummary extends Shape
{
    /**
     * @param array{
     *     SubscriptionId: string,
     *     DisplayName?: string|null,
     *     State?: string|null,
     *     ManagementGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
