<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureName
 * @property 'Integral'|'Fractional'|'String' $FeatureType
 * @property 'List'|'Set'|'Vector'|null $CollectionType
 * @property CollectionConfig|null $CollectionConfig
 */
class FeatureDefinition extends Shape
{
    /**
     * @param array{
     *     FeatureName: string,
     *     FeatureType: 'Integral'|'Fractional'|'String',
     *     CollectionType?: 'List'|'Set'|'Vector'|null,
     *     CollectionConfig?: CollectionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
