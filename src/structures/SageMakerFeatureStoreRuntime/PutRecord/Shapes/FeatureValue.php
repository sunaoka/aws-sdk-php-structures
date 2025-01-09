<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\PutRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeatureName
 * @property string $ValueAsString
 * @property list<string> $ValueAsStringList
 */
class FeatureValue extends Shape
{
    /**
     * @param array{
     *     FeatureName: string,
     *     ValueAsString?: string,
     *     ValueAsStringList?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
