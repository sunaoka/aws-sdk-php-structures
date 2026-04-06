<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureName
 * @property string $ValueAsString
 */
class FeatureValue extends Shape
{
    /**
     * @param array{
     *     FeatureName: string,
     *     ValueAsString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
