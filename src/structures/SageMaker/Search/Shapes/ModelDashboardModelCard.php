<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelCardArn
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 * @property ModelCardSecurityConfig $SecurityConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 * @property list<Tag> $Tags
 * @property string $ModelId
 * @property string $RiskRating
 */
class ModelDashboardModelCard extends Shape
{
    /**
     * @param array{
     *     ModelCardArn?: string,
     *     ModelCardName?: string,
     *     ModelCardVersion?: int,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived',
     *     SecurityConfig?: ModelCardSecurityConfig,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext,
     *     Tags?: list<Tag>,
     *     ModelId?: string,
     *     RiskRating?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
