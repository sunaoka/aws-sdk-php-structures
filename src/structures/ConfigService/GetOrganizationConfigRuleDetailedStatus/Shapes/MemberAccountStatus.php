<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConfigRuleDetailedStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ConfigRuleName
 * @property 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $MemberAccountRuleStatus
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 */
class MemberAccountStatus extends Shape
{
    /**
     * @param array{
     *     AccountId: string,
     *     ConfigRuleName: string,
     *     MemberAccountRuleStatus: 'CREATE_SUCCESSFUL'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_SUCCESSFUL'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'|'UPDATE_SUCCESSFUL'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
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
