<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $creatorAccountId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property 'CALENDAR_MONTH'|'NONE' $autoRefresh
 * @property PrivacyBudgetTemplateParametersOutput $parameters
 */
class CollaborationPrivacyBudgetTemplate extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     creatorAccountId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     autoRefresh: 'CALENDAR_MONTH'|'NONE',
     *     parameters: PrivacyBudgetTemplateParametersOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
