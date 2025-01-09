<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelCardContent
 * @property 'Draft'|'PendingReview'|'Approved'|'Archived' $ModelCardStatus
 */
class ModelPackageModelCard extends Shape
{
    /**
     * @param array{
     *     ModelCardContent?: string,
     *     ModelCardStatus?: 'Draft'|'PendingReview'|'Approved'|'Archived'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
