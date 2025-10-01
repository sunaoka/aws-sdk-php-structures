<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $privacyBudgetTemplateId
 * @property string $privacyBudgetTemplateArn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $type
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property PrivacyBudget $budget
 */
class PrivacyBudgetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     privacyBudgetTemplateId: string,
     *     privacyBudgetTemplateArn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     type: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     budget: PrivacyBudget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
