<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelCardArn
 * @property string|null $ModelCardName
 * @property int|null $ModelCardVersion
 * @property string|null $Content
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived'|null $ModelCardStatus
 * @property ModelCardSecurityConfig|null $SecurityConfig
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 * @property list<Tag>|null $Tags
 * @property string|null $ModelId
 * @property string|null $RiskRating
 * @property string|null $ModelPackageGroupName
 */
class ModelCard extends Shape
{
    /**
     * @param array{
     *     ModelCardArn?: string|null,
     *     ModelCardName?: string|null,
     *     ModelCardVersion?: int|null,
     *     Content?: string|null,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'|null,
     *     SecurityConfig?: ModelCardSecurityConfig|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null,
     *     Tags?: list<Tag>|null,
     *     ModelId?: string|null,
     *     RiskRating?: string|null,
     *     ModelPackageGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
