<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageConfiguration $storage
 * @property BlockStoragePerformanceConfiguration $performance
 * @property string $attachmentState
 */
class EbsVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     storage?: StorageConfiguration,
     *     performance?: BlockStoragePerformanceConfiguration,
     *     attachmentState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
