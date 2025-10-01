<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $privacyBudgetTemplateId
 * @property string $privacyBudgetTemplateArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $creatorAccountId
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $type
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property PrivacyBudget $budget
 */
class CollaborationPrivacyBudgetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     privacyBudgetTemplateId: string,
     *     privacyBudgetTemplateArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     creatorAccountId: string,
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
