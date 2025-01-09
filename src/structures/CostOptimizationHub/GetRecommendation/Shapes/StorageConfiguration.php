<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property double $sizeInGb
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     sizeInGb?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
