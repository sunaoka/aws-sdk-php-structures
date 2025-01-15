<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property double|null $sizeInGb
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     sizeInGb?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
