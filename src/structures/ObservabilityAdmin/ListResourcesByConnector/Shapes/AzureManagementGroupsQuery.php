<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParentManagementGroupId
 */
class AzureManagementGroupsQuery extends Shape
{
    /**
     * @param array{ParentManagementGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
