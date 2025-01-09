<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureName
 * @property 'Integral'|'Fractional'|'String' $FeatureType
 * @property 'List'|'Set'|'Vector' $CollectionType
 * @property CollectionConfig $CollectionConfig
 */
class FeatureDefinition extends Shape
{
    /**
     * @param array{
     *     FeatureName: string,
     *     FeatureType: 'Integral'|'Fractional'|'String',
     *     CollectionType?: 'List'|'Set'|'Vector',
     *     CollectionConfig?: CollectionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
