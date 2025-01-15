<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureName
 * @property string|null $ValueAsString
 * @property list<string>|null $ValueAsStringList
 */
class FeatureValue extends Shape
{
    /**
     * @param array{
     *     FeatureName: string,
     *     ValueAsString?: string|null,
     *     ValueAsStringList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
