<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ModelMetadataFilter> $Filters
 */
class ModelMetadataSearchExpression extends Shape
{
    /**
     * @param array{Filters?: list<ModelMetadataFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
