<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagementGroupId
 * @property list<string>|null $SubscriptionIds
 */
class AzureQueryScope extends Shape
{
    /**
     * @param array{
     *     ManagementGroupId?: string|null,
     *     SubscriptionIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
