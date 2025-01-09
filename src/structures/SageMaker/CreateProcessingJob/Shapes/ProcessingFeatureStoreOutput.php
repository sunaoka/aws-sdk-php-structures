<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureGroupName
 */
class ProcessingFeatureStoreOutput extends Shape
{
    /**
     * @param array{FeatureGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
