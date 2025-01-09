<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConformancePackDetailedStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ConformancePackName
 * @property 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $Status
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 */
class OrganizationConformancePackDetailedStatus extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     ConformancePackName: string,
     *     Status: 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
