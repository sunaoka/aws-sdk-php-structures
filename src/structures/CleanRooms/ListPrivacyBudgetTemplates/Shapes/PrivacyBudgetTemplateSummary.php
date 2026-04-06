<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListPrivacyBudgetTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property 'DIFFERENTIAL_PRIVACY'|'ACCESS_BUDGET' $privacyBudgetType
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class PrivacyBudgetTemplateSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
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
