<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConformancePackDetailedStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $Status
 */
class OrganizationResourceDetailedStatusFilters extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Status?: 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
