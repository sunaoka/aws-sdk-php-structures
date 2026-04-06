<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageConfiguration|null $storage
 * @property BlockStoragePerformanceConfiguration|null $performance
 * @property string|null $attachmentState
 */
class EbsVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     storage?: StorageConfiguration|null,
     *     performance?: BlockStoragePerformanceConfiguration|null,
     *     attachmentState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
