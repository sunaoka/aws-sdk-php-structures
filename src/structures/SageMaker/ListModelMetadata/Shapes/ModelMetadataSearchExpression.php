<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ModelMetadataFilter>|null $Filters
 */
class ModelMetadataSearchExpression extends Shape
{
    /**
     * @param array{Filters?: list<ModelMetadataFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
