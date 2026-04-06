<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetPrivacyBudgetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property 'CALENDAR_MONTH'|'NONE' $autoRefresh
 * @property PrivacyBudgetTemplateParametersOutput $parameters
 */
class PrivacyBudgetTemplate extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
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
