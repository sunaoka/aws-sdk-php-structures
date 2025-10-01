<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationPrivacyBudgetTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $creatorAccountId
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class CollaborationPrivacyBudgetTemplateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     creatorAccountId: string,
     *     privacyBudgetType: 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
