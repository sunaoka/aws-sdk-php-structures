<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagementGroupId
 */
class AzureSubscriptionsQuery extends Shape
{
    /**
     * @param array{ManagementGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
