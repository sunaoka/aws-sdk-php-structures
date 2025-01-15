<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelCardContent
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived'|null $ModelCardStatus
 */
class ModelPackageModelCard extends Shape
{
    /**
     * @param array{
     *     ModelCardContent?: string|null,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
