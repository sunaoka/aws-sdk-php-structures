<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConformancePackStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConformancePackName
 * @property 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $Status
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 */
class OrganizationConformancePackStatus extends Shape
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     Status: 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
