<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeatureName
 * @property 'Integral'|'Fractional'|'String'|null $FeatureType
 */
class FeatureDefinition extends Shape
{
    /**
     * @param array{
     *     FeatureName?: string|null,
     *     FeatureType?: 'Integral'|'Fractional'|'String'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
