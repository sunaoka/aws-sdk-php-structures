<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeOrganizationConfigRuleStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationConfigRuleName
 * @property 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $OrganizationRuleStatus
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 */
class OrganizationConfigRuleStatus extends Shape
{
    /**
     * @param array{
     *     OrganizationConfigRuleName: string,
     *     OrganizationRuleStatus: 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
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
